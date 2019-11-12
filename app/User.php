<?php

namespace App;

use Illuminate\Notifications\Notifiable;
  use App\Notifications\MyResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type','activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    public function setPasswordAttribute($value)
    {
       if (! empty ($value))
      {
        $this->attributes['password']= bcrypt($value);
      }
    }

    public function scopeSearch($query, $name)
         {
          return $query ->where('name','LIKE' ,  "%$name%");
         }

    public function admin()
     {
      return $this->type==='1';
     }

    public function supraadmin()
     {
      return $this->type==='2';
     }
 

     public function USER(){
        return $this->type==='0';
     }

     public  function ordenesdeservicios()
      {
         return $this->HasMany('App\ordenesdeservicio');
      }

     public  function documentos()
      {
         return $this->HasMany('App\documento');
     }
}
