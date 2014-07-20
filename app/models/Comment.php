<?php

class Comment extends Eloquent {
	protected $fillable = array('author', 'email', 'text');
}
