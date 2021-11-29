<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\ImovelImagem;
use App\Models\Configuracao;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Image;

class ImoveisController extends Controller
{
    //

    public function consultar(){
        $imoveis = Imovel::all();
        $configuracao = Configuracao::first();
        return view("painel.imoveis.consultar", ["imoveis" => $imoveis, "configuracao" => $configuracao]);
    }

    public function cadastro(){
        return view("painel.imoveis.cadastro");
    }

    public function cadastrar(Request $request){

        $request->validate([
            'nome' => 'unique:imovels,nome',
            'codigo' => 'unique:imovels,codigo'
        ]);

        libxml_use_internal_errors(true);

        $imovel = new Imovel;
        $imovel->nome = $request->nome;
        $imovel->slug = Str::slug($imovel->nome);
        $imovel->codigo = $request->codigo;
        $imovel->titulo = $request->titulo;
        $imovel->lista = $request->lista;
        if($request->prioridade_lista){
            $imovel->prioridade_lista = true;
        }
        else{
            $imovel->prioridade_lista = false;
        }
        $imovel->subtitulo = $request->subtitulo;
        $imovel->icone1_texto = $request->icone1_texto;
        $imovel->icone2_texto = $request->icone2_texto;
        $imovel->icone3_texto = $request->icone3_texto;
        $imovel->icone4_texto = $request->icone4_texto;
        $imovel->icone5_texto = $request->icone5_texto;

        // UPLOAD DE IMAGENS
        if($request->file("imagem1")){
            $imovel->imagem1 = $request->file('imagem1')->store(
                'site/imagens/imoveis/' . $imovel->codigo, 'local'
            );
        }

        if($request->file("imagem2")){
            $imovel->imagem2 = $request->file('imagem2')->store(
                'site/imagens/imoveis/' . $imovel->codigo, 'local'
            );
        }

        if($request->file("imagem3")){
            $imovel->imagem3 = $request->file('imagem3')->store(
                'site/imagens/imoveis/' . $imovel->codigo, 'local'
            );
        }

        if($request->file("imagem4")){
            $imovel->imagem4 = $request->file('imagem4')->store(
                'site/imagens/imoveis/' . $imovel->codigo, 'local'
            );
        }

        if($request->file("imagem5")){
            $imovel->imagem5 = $request->file('imagem5')->store(
                'site/imagens/imoveis/' . $imovel->codigo, 'local'
            );
        }

        // SALVANDO IMAGENS DO EDITOR DE TEXTO
        $dom = new \DOMDocument();
        $dom->loadHTML(
            mb_convert_encoding($request->descricao, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                if(!is_dir('site/imagens/imoveis/' . $imovel->codigo . "/")){
                    mkdir('site/imagens/imoveis/' . $imovel->codigo . "/");
                }
                $path = 'site/imagens/imoveis/' . $imovel->codigo . "/" . uniqid('', true) . '.' . $mimeType;

                Image::make($src)
                    ->encode($mimeType, 80)
                    ->save(public_path($path));

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }

        $imovel->descricao = $dom->saveHTML();
        $imovel->save();

        toastr()->success("Imóvel criado com sucesso!");
        return redirect()->route("painel.imoveis");
        
    }

    public function editar(Imovel $imovel){
        return view("painel.imoveis.editar", ["imovel" => $imovel]);
    }

    public function consultar_imagem(Imovel $imovel){
        $imagens = $imovel->imagens;
        return view("painel.imoveis.consultar_imagem", ["imagens" => $imagens]);
    }

    public function deletar_imagem(ImovelImagem $imagem) {
        Storage::delete($imagem->imagem);

        $imagem->delete();
        toastr()->success("Imagem removida com sucesso!");
        return redirect()->back();
    }

    public function salvar_imagem(Request $request, Imovel $imovel) {

        // UPLOAD DE IMAGENS
        $imagem = new ImovelImagem;
        $imagem->imovel_id = $imovel->id;
        if($request->file("imagem")){
            $imagem->imagem = $request->file('imagem')->store(
                'site/imagens/imoveis/' . $imovel->codigo, 'local'
            );
        }

        $imagem->save();

        toastr()->success("Imagem salva com sucesso!");

        return redirect()->route("painel.imoveis.imagens", ["imovel" => $imovel]);
    }

    public function salvar(Request $request, Imovel $imovel){
        $request->validate([
            'nome' => 'unique:imovels,nome,'.$imovel->id,
            'codigo' => 'unique:imovels,codigo,'.$imovel->id
        ]);

        libxml_use_internal_errors(true);

        $imovel->nome = $request->nome;
        $imovel->slug = Str::slug($imovel->nome);
        $imovel->codigo = $request->codigo;
        $imovel->titulo = $request->titulo;
        $imovel->subtitulo = $request->subtitulo;
        $imovel->icone1_texto = $request->icone1_texto;
        $imovel->icone2_texto = $request->icone2_texto;
        $imovel->icone3_texto = $request->icone3_texto;
        $imovel->icone4_texto = $request->icone4_texto;
        $imovel->icone5_texto = $request->icone5_texto;
        $imovel->lista = $request->lista;
        if($request->prioridade_lista){
            $imovel->prioridade_lista = true;
        }
        else{
            $imovel->prioridade_lista = false;
        }

        // SALVANDO IMAGENS DO EDITOR DE TEXTO
        $dom = new \DOMDocument();
        $dom->loadHTML(
            mb_convert_encoding($request->descricao, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                if(!is_dir('site/imagens/imoveis/' . $imovel->codigo . "/")){
                    mkdir('site/imagens/imoveis/' . $imovel->codigo . "/");
                }
                $path = 'site/imagens/imoveis/' . $imovel->codigo . "/" . uniqid('', true) . '.' . $mimeType;

                Image::make($src)
                    ->encode($mimeType, 80)
                    ->save(public_path($path));

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }

        $imovel->descricao = $dom->saveHTML();
        $imovel->save();

        toastr()->success("Imóvel salvo com sucesso!");
        return redirect()->route("painel.imoveis");
    }

    public function top(Request $request, Imovel $imovel){
        $configuracao = Configuracao::first();

        if($configuracao->top1 == $imovel->id){
            $pos_antigo = 1;
        }elseif($configuracao->top2 == $imovel->id){
            $pos_antigo = 2;
        }elseif($configuracao->top3 == $imovel->id){
            $pos_antigo = 3;
        }elseif($configuracao->top4 == $imovel->id){
            $pos_antigo = 4;
        }elseif($configuracao->top5 == $imovel->id){
            $pos_antigo = 5;
        }else{
            $pos_antigo = null;
        }

        switch($request->posicao){
            case 1:
                $imovel_antigo = $configuracao->top1;
                $configuracao->top1 = $imovel->id;
                break;
            case 2:
                $imovel_antigo = $configuracao->top2;
                $configuracao->top2 = $imovel->id;
                break;
            case 3:
                $imovel_antigo = $configuracao->top3;
                $configuracao->top3 = $imovel->id;
                break;
            case 4:
                $imovel_antigo = $configuracao->top4;
                $configuracao->top4 = $imovel->id;
                break;
            case 5:
                $imovel_antigo = $configuracao->top5;
                $configuracao->top5 = $imovel->id;
                break;
        }

        if($pos_antigo){
            if($pos_antigo == 1){
                $configuracao->top1 = $imovel_antigo;
            }elseif($pos_antigo == 2){
                $configuracao->top2 = $imovel_antigo;
            }elseif($pos_antigo == 3){
                $configuracao->top3 = $imovel_antigo;
            }elseif($pos_antigo == 4){
                $configuracao->top4 = $imovel_antigo;
            }elseif($pos_antigo == 5){
                $configuracao->top5 = $imovel_antigo;
            }
        }

        
        $configuracao->save();
        toastr()->success("Top " . $request->posicao . " definido com sucesso!");
        return redirect()->back();
    }
}
