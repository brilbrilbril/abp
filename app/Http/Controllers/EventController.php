<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{   public function index()
    {
	    $prods = Event::get();
	    return view('event/index', ['list' => $prods]);
    }

  public function create()
  {
	    return view('event.form', [
	      'title' => 'Tambah',
	      'method' => 'POST',
	      'action' => 'event'
    ]);
  }

  public function store(Request $request)
  {
	    $prod = new Event;
	    $prod->judul = $request->judul;
	    $prod->lokasi = $request->lokasi;
        $prod->tanggal = $request->tanggal;
        $prod->detail = $request->detail;
        $prod->gambar = $request->gambar;
	    $prod->save();
	    return redirect('/event')->with('msg', 'Tambah berhasil');
  }

  public function show($id)
  {
	    return Event::find($id);
  }

  public function edit($id)
  {
	    return view('event.form', [
	      'title' => 'Edit',
	      'method' => 'PUT',
	      'action' => "event/$id",
	      'data' => Event::find($id)
    ]);
  }

  public function update(Request $request, $id)
  {
	    $prod = Event::find($id);
	    $prod->name = $request->name;
	    $prod->price = $request->price;
	    $prod->save();
	    return redirect('/event')->with('msg', 'Edit berhasil');
  }

  public function destroy($id)
  {
	    Event::destroy($id);
    // atau
	    /* $prod = Product::find($id);
	    $prod->delete(); */
	    return redirect('/event')->with('msg', 'Hapus berhasil');
  }

}
