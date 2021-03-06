
<?php

class RegisterRecord extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'register_records';

    protected $fillable = array(
        'start',
        'status',
        'fee',
        'advice',
        'return_date',
        'doctor_id',
        'account_id',
        'user_id',
        'period_id'
    );

    public function user(){
        return $this->belongsTo( 'User' );
    }

    public function doctor(){
        return $this->belongsTo( 'Doctor' );
    }

    public function register_account(){
        return $this->belongsTo( 'RegisterAccount', 'account_id', 'id' );
    }

    public function period(){
        return $this->belongsTo( 'Period' );
    }

    public function comment(){
        return $this->hasOne( 'Comment', 'record_id', 'id' );
    }

}
