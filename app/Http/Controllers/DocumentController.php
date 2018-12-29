<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //

        $allFiles=  Document::all();


        return view('pages.list')->with('document',$allFiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/upload',$filename);
            $document = new Document;

            $document->serialNumber = $request->serialNumber;
            $document->name = $request->name;
            $document->location = $request->location;
            $document->owner = $request->owner;
            $document->image =  $filename;
            $document->size = $filesize;

            $document->save();
            return redirect('/search')->with('success','Information Saved !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show( $document)
    {
        //
        $document = Document::find($document);

        return view('pages.showindividualdocument') ->with('document',$document);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $document = Document::find($id);
         return view('pages.updateDocument',compact('document','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $documentUpdate = Document::find($id);
        $documentUpdate ->status= $request->get('status');
        $documentUpdate->save();
        return redirect('/search')->with('success','Status Updated !');


    }

    public function viewItems(Document $document){
        return view('pages.viewitems');
    }

    public function updateDocument(Request $request, $id){

         $document->serialNumber=$request->get('serialNumber');


            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/upload', $filename);

            $document = Document::find($id);
            $document->serialNumber = $request->get('serialNumber');
            $document->name = $request->get('name');
            $document->location = $request->get('location');
            $document->owner = $request->get('owner');
            $document->image = $filename;
            $document->size = $filesize;
            $document->status = $request->get('status');

            $document->save();
            return redirect('/addDocument')->with('success', 'Information Updated !');


}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //

    }

    public function completeUpdate(Request $request, $task){
        $task->status_id = $request->status_id;



    }
    // public function search(Request $request){
    //     $output = "";
    //     if($request->ajax()){
    //         $documents = DB::table('documents')->where('serialNumber','LIKE', '%'.$request->search.'%')
    //                                     ->orWhere('owner','LIKE','%'.$request->search.'%')->get();

    //         if($documents){
    //            foreach ($documents as $key => $doc) {
    //                $output.='<tr>'.
    //                      '<td>.$doc->serialNumber.</td>'.
    //                      '<td>.$doc->name.</td>'.
    //                      '<td>.$doc->location.</td>'.

    //                '</tr>';
    //            }
    //         //    return Response($output);

    //         }
    //     }
    //     return view('pages.search');
    // }
}

