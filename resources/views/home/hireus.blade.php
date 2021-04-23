<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 03/01/2017
 * Time: 5:46 PM
 */?>



<style>
    .ipf-hire h1,.ipf-hire h2{color:#fff;text-align:center}.ipf-hire{width:100%;height:auto;background-image:url("<?=base_url('assets/images/hirebg.jpg')?>");padding:100px 0;display:block;cursor:pointer;background-position:bottom;overflow:hidden}.ipf-hire h1{font-size:.9em;text-transform:uppercase;font-family:"Bariol bold",sans-serif;margin-bottom:10px;letter-spacing:.155em;transform:translateY(-50px);transition:all .5s ease-in-out;opacity:0}.ipf-hire h2{font-size:7em;font-family:CaslonGraphiqueEF,sans-serif;overflow:hidden}.ipf-hire h2:hover:before{top:115px}.ipf-hire::before{position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,.1);content:'';opacity:0;-webkit-transition:-webkit-transform .6s;transition:all .6s ease-in;-webkit-transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0)}.ipf-hire:hover::before{opacity:1;-webkit-transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,150%,0);transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,150%,0)}.ipf-hire:hover h1{transform:translateY(0);opacity:1}@media screen and (max-width:540px){.ipf-hire h2{font-size:5em}}
</style>


<a class="ipf-hire" href="<?=base_url('contact/agency')?>" >
    
    <h1>your imagination our creation.</h1>
    <h2>Partner With Us.</h2>
    
</a>