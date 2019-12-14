<?php
/**
 * Created by PhpStorm.
 * User: AYINDE
 * Date: 14/12/2019
 * Time: 13:24
 */
?>

Hello {{ $user->name }}
You changed your email, so you need to verify this new address, Please use the link below:
{{ route('verify',$user->verification_token) }}
