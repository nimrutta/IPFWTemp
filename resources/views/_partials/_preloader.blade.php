<script>
    function removeLoader(latencify){
        if(latencify){
            setTimeout(function(){ //SIMULATE NETWORK LATENCY(REMOVE IT)
                document.getElementById("loaderWrapper").classList.remove("loading");
                document.body.classList.add('loaded');
            }, 8000);
        }else{
            document.getElementById("loaderWrapper").classList.remove("loading");
            document.body.classList.add('loaded');
        }
    }

    setTimeout(function(){
        document.getElementById("loadSkipper").classList.add("visible");
    }, 5000);
</script>
<style>
    body{padding:0;margin:0;overflow-x:hidden}body:not(.loaded){max-height:100vh;overflow-y:hidden}.loader-container{display:none;width:100vw;height:100vh;background-color:#f9f9f9;z-index:9999;position:fixed;top:0;left:0;transition:all .3s ease-in}.loader{font-size:10px;text-indent:-9999em;width:11em;height:11em;border-radius:50%;background:#1e90ff;background:-moz-linear-gradient(left,#1e90ff 10%,rgba(53,156,255,0) 42%);background:-webkit-linear-gradient(left,#1e90ff 10%,rgba(53,156,255,0) 42%);background:-o-linear-gradient(left,#1e90ff 10%,rgba(53,156,255,0) 42%);background:-ms-linear-gradient(left,#1e90ff 10%,rgba(53,156,255,0) 42%);background:linear-gradient(to right,#1e90ff 10%,rgba(53,156,255,0) 42%);position:absolute;top:40%;left:45%;transform:translateX(-45%);transform:translateY(-40%);-webkit-animation:load3 1.4s infinite linear;animation:load3 1.4s infinite linear}.loader:after,.loader:before{content:'';top:0;position:absolute}.loader:before{width:50%;height:50%;background:#1e90ff;border-radius:100% 0 0;left:0}.loader:after{background:#f9f9f9;width:75%;height:75%;border-radius:50%;margin:auto;left:0;bottom:0;right:0}@-webkit-keyframes load3{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes load3{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.loader-container div:last-child{text-align:center;position:absolute;bottom:8%;left:0;right:0;margin:auto}.loader-container span{display:block;font-size:1.3em;color:#1e90ff}.loader-container a{position:relative;font-size:.8em;display:inline-block;margin-left:8px;color:#aaa!important;font-weight:700}.loader-container a:not(.visible){pointer-events:none}.loader-container a:before{display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex;-ms-align-items:center;align-items:center;content:attr(data-text);position:absolute;left:0;top:0;text-decoration:underline;overflow:hidden;max-width:100%;white-space:nowrap;color:#aaa;opacity:1;border-radius:3px;font-size:1em;animation:loading 5s linear}@keyframes loading{0%{max-width:0}}@-webkit-keyframes loading{0%{max-width:0}}.loader-container:not(.loading){-webkit-animation:fadeUp .2s ease-out forwards;animation:fadeUp .2s ease-out forwards;pointer-events:none}@-webkit-keyframes fadeUp{0%{-webkit-transform:none;transform:none;opacity:1}100%{-webkit-transform:translateY(-60%);transform:translateY(-60%);opacity:0}}@keyframes fadeUp{0%{-webkit-transform:none;transform:none;opacity:1}50%{opacity:1;-webkit-transform:translateY(-30%);transform:translateY(-30%)}100%{-webkit-transform:translateY(-60%);transform:translateY(-60%);opacity:0}}#mainContent{height:120vh;width:100vw;display:flex;align-items:center;justify-content:center;background:#1e90ff}#mainContent div{display:flex;flex-direction:column;align-items:center;justify-content:center;max-width:800px}#pageTitle{font-size:6em;margin-bottom:-4px}#pageDesc{font-size:1.2em;line-height:1.2em;letter-spacing:1.2px}
</style>
<body onload="removeLoader(true)">
<div id="loaderWrapper" class="loader-container loading">
    <div class="loader">Loading...</div>
    <div>
        <span>Loading a better experience for you!</span>
        <a id="loadSkipper" href="javascript:void(0);" data-text="It's Okay,Just Take Me There!" onclick="removeLoader()">It's Okay,Just Take Me There!</a>
    </div>
</div>