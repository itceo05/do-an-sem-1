<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CinemaDetail;
use App\Models\CategoryDetail;
use App\Models\Photo;
class Film extends Model
{
    protected $fillable = ['name', 'slug', 'cast', 'director', 'image', 'trailer', 'time', 'release_date', 'description', 'status'];
    use SoftDeletes;
    public function add($request){
        $file = $request->image;
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move('Uploads', $fileName);

        $files = $request->trailer;
        $fileTrailer = time().'_'.$files->getClientOriginalName();
        $files->move('Uploads', $fileTrailer);

        $AddFilm = Film::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'cast'=>$request->cast,
            'director'=>$request->director,
            'image'=>$fileName,
            'trailer'=>$fileTrailer,
            'time'=>$request->time,
            'release_date'=>$request->release_date,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        if($request->has('photos')){
            $files = $request->photos;
            foreach($files as $key => $value){
                $photos = time().'_'.$value->getClientOriginalName();
                $Photos = Photo::create([
                    'film_id'=>$AddFilm->id,
                    'image'=>$photos
                ]);
                $value->move(public_path('Uploads'), $photos);
            }
        }

        if($request->has('cinema_id')){
            $Cinema = $request->cinema_id;
            foreach($Cinema as $key => $value){
                $Cinemas = CinemaDetail::create([
                    'cinema_id'=>$value,
                    'film_id'=>$AddFilm->id,
                ]);
            }
        }

        if($request->has('category_id')){
            $Category = $request->category_id;
            foreach($Category as $key => $value){
                $Categories = CategoryDetail::create([
                    'category_id'=>$value,
                    'film_id'=>$AddFilm->id,
                ]);
            }
        }
        
    }

    public function edit($request, $id){
        $finbyId = Film::find($id);

        if($request->has('image')){
            $file = $request->image;
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('Uploads', $fileName);
            $image_path = 'Uploads/'.$finByid->image;
            unlink($image_path);
        }else{
            $fileName = $finbyId->image;
        }

        $EditFilm = $finbyId->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'cast'=>$request->cast,
            'director'=>$request->director,
            'image'=>$fileName,
            'trailer'=>$request->trailer,
            'time'=>$request->time,
            'release_date'=>$request->release_date,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);

        if($request->has('photos')){
            $Photos = Photo::where('film_id', $id)->get();
            foreach($Photos as $key => $value){
                $images_path = 'Uploads/'.$value->image;
                $value->delete();
                if(file_exists($images_path)){
                    unlink($images_path);
                }
            }

            $files = $request->photos;
            foreach($files as $key => $value){
                $photos = time().'_'.$value->getClientOriginalName();
                $PhotosU = Photo::create([
                    'film_id'=>$finbyId->id,
                    'image'=>$photos
                ]);
                $value->move(public_path('Uploads'), $photos);
            }
        }

        if($request->has('cinema_id')){
            $Cinema = CinemaDetail::where('film_id', $id)->get();
            foreach($Cinema as $key => $value){
                $value->where('film_id', $id)->delete();
            }

            $CinemaU = $request->cinema_id;
            foreach($CinemaU as $key => $value){
                $Cinemas = CinemaDetail::create([
                    'cinema_id'=>$value,
                    'film_id'=>$finbyId->id,
                ]);
            }
        }

        if($request->has('category_id')){
            $Category = CategoryDetail::where('film_id', $id)->get();
            foreach($Category as $key => $value){
                $value->where('film_id', $id)->delete();
            }

            $CategoryU = $request->category_id;
            foreach($CategoryU as $key => $value){
                $Categories = CategoryDetail::create([
                    'category_id'=>$value,
                    'film_id'=>$finbyId->id,
                ]);
            }
        }
    }

    public function Remove($id){
        $finbyId = Film::find($id);
        $finbyId->delete();
    }

    use HasFactory;
}
