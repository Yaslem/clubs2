<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'number_of_whatsapp',
        'role',
        'membership_status',
        'club_id',
        'level_id',
        'college_id',
        'country_id',
        'avatar',
        'ID_Number'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function club()
    {
        return $this->belongsToMany(Club::class, 'user_club', 'user_id', 'club_id', 'id', 'id');
    }

    public function clubManager()
    {
        return $this->hasOne(Club::class, 'manager_id');
    }

    public function clubManagement()
    {
        return $this->belongsToMany(User::class, 'club_management', 'user_id', 'club_id', 'id', 'id');
    }

    public function deputy()
    {
        return $this->belongsToMany(Club::class, 'club_management', 'user_id', 'deputy_id', 'id', 'id');
    }

    public function userDeputy()
    {
        return $this->belongsToMany(Administrative::class, 'club_management', 'deputy_id', 'administrative_id', 'id', 'id');
    }

    public function administratives()
    {
        return $this->belongsToMany(Administrative::class, 'club_management', 'user_id', 'administrative_id', 'id', 'id');
    }



    public function report()
    {
        return $this->hasMany(Report::class, 'user_id');
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'user_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }

    public function awards()
    {
        return $this->hasMany(Award::class, 'user_id');
    }

    public function coordinator()
    {
        return $this->hasOne(Award::class, 'coordinator');
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class, 'user_id');
    }


    public function attendees()
    {
        return $this->hasOne(Attende::class, 'user_id');
    }

    public function ClubStatus()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permission', 'user_id', 'permission_id', 'id', 'id');
    }

    public function is_view($permission)
    {
        return $this->permissions()->where('name', $permission)->exists();
    }

    public function orders(){
        return $this->hasMany(Order::class, 'user_id');
    }

    public function replies(){
        return $this->hasMany(Reply::class, 'user_id');
    }


}
