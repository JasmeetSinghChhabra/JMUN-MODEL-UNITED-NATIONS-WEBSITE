(function(){

	$("#patch").hide();
	
	
	var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper');

    //open and close menu when the button is clicked
	var open = false;
	button.addEventListener('click', handler, false);
	

	function handler(){
	  if(!open){
	    this.innerHTML = "Close";
	    classie.add(wrapper, 'opened-nav');
		$('#pulse_fanout').hide();
		var ver1 = parseInt(window.navigator.appVersion.match(/Chrome\/(\d+)\./)[1], 10);
		if(ver1==32)
		//patch_flag=1;
		if(patch_flag==0)
		$('#patch').fadeIn(500);
	  }
	  else{
	    this.innerHTML = "Menu";
		classie.remove(wrapper, 'opened-nav');
		$('#pulse_fanout').show();
		var ver2 = parseInt(window.navigator.appVersion.match(/Chrome\/(\d+)\./)[1], 10);
		if(ver2==32)
		//patch_flag=1;
		if(patch_flag==0)
		$('#patch').fadeOut(500);
	  }
	  open = !open;
	}
	function closeWrapper(){
		classie.remove(wrapper, 'opened-nav');
	}

})();

