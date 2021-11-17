<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = ['email', 'phone', 'address'];

    public function add($request){
        $AddContactInfo = ContactInfo::create([
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);
    }

    public function edit($request, $id){
        $finbyId = ContactInfo::find($id);
        
        $EditLogo = $finbyId->update([
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);
    }

    public function Remove($id){
        $finbyId = ContactInfo::find($id);

        $finbyId->delete();
    }
    use HasFactory;
}
