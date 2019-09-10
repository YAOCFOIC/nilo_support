<?php

namespace App\Http\Controllers;

use App\support;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\StoreRequest;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view index.blade
        // var = class::property

        $supports = support::orderBy('id','DESC')->paginate(3);
        return view('support.index',compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view create.blade
        return view('support.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //support::create($request->all());
        $entrada=$request->all();
        if ($archivo=$request->file('file')){
            //nombre de la imagen 
            $nombre=$archivo->getClientOriginalName();
            //mueva ese archivo
            $archivo->move('images',$nombre);
            $entrada['file']=$nombre;
        
        }else(is_null($request->file('file'))){
            if ($supports->category=="Facturación Electrónica") {
                # code...
            }else if ($supports->category=="CRM") {
                # code...
            }else if($supports->category=="Contacto") {

            }else ($supports->category=="Factura Fisica") {

            }
        }
        support::create($entrada);
        Session::flash('message','Pregunta creada correctamente');
        return redirect()->route('supports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(support $support)
    {
        return  view('support.edit',compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, support $support)
    {
        $request->validate([
            'category'=>'required',
            'question'=>'required',
            'solution'=>'required',
        ]);
        $support->update($request->all());

        Session::flash('message','Pregunta actualizada correctamente');
        return redirect()->route('supports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(support $support)
    {
        $support->delete();
        Session::flash('message','Pregunta eliminada correctamente');
        return redirect()->route('supports.index');
    }
}
