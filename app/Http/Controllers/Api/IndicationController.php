<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IndicationRequest;
use App\Models\Indication;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    public function indications()
    {
        $indications = Indication::all();
        return response($indications);
    }

    public function store(IndicationRequest $request)
    {
        $data            = $request->except('token');
        $data['user_id'] = auth()->user()->id;
        Indication::create($data);

        return response(['message' => 'Indicado com sucesso'], 200);
    }

    public function checkCPF(Request $request)
    {
        if(Indication::where('cpf', $request->cpf)->exists()){
            return response(['message' => 'CPF já indicado'], 406);
        }

        return response(['message' => 'OK']);
    }

    public function delete($id)
    {
        Indication::destroy($id);
        return response(['message' => 'Excluído com sucesso']);
    }

    public function inProcess($id)
    {
        Indication::find($id)->update(['status' => Indication::STATUS_PROCESS]);
        return response(['message' => 'Indicação em Processo']);
    }

    public function finish($id)
    {
        Indication::find($id)->update(['status' => Indication::STATUS_FINISH]);
        return response(['message' => 'Indicação em Processo']);
    }
}
