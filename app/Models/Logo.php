<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $fillable = ['image', 'status'];
    use SoftDeletes;
    public function add($request){
        $file = $request->image;
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move('Uploads', $fileName);

        $AddLogo = Logo::create([
            'image'=>$fileName,
            'status'=>$request->status,
        ]);
    }

    public function edit($request, $id){
        $finbyId = Logo::find($id);

        if($request->has('image')){
            $image_path = 'Uploads/'.$finbyId->image;
            unlink($image_path);

            $file = $request->image;
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('Uploads', $fileName);
        }else{
            $fileName = $finbyId->image;
        }
        
        $EditLogo = $finbyId->update([
            'image'=>$fileName,
            'status'=>$request->status,
        ]);
    }

    public function Remove($id){
        $finbyId = Logo::find($id);
        
        $image_path = 'Uploads/'.$finbyId->image;
        unlink($image_path);

        $finbyId->delete();
    }
    use HasFactory;
}