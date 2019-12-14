<?php
/**
 * Created by PhpStorm.
 * User: AYINDE
 * Date: 14/12/2019
 * Time: 11:32
 */
?>
Hello {{ $user->name }}
Thank you for creating an account. Please verify your email using the link:
{{ route('verify',$user->verification_token) }}
