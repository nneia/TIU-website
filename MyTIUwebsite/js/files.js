	function shadow(){
		let shadow = document.createElement("div");
		shadow.classList.add("modal-shadow");
		document.getElementById('body').appendChild(shadow);
		setTimeout( () => {
				shadow.style.opacity = 0.6;
			}, 0);
	}
	function clearModal(){
		let pageBody = document.getElementById("body");
		let modalContainer = document.getElementById("modal-container");
		let poster = modalContainer.querySelector('.poster-container');
		let modalShadow = document.querySelector(".modal-shadow");
		
		
		function checkArea (){

			modalShadow.addEventListener('click', (e) => {
				if (e.target != poster) {
					console.log(e.currentTarget);
					setTimeout( () => {
						modalShadow.style.opacity = 0;
					}, 0);
					setTimeout( () => {
						modalShadow.remove();
					}, 150);
					if (modalContainer.innerHTML != "") {
						setTimeout( () => {

							poster.style.opacity = 0;

						}, 0);
					};
					if (modalContainer.innerHTML != "") {
						setTimeout( () => {
							modalContainer.innerHTML = "";

						}, 150);
					};

				}
			});
		}
		setTimeout( () => {
			checkArea ();
		}, 10)
	}











let modal_value = "";
selectModal();
function selectModal() {
	let poster1 = document.getElementById('p1')
	let poster2 = document.getElementById('p2')
	let poster3 = document.getElementById('p3')

	poster1.addEventListener('click', () => {
		modal_value = 'poster_1';
		openModal();
		shadow();
		clearModal();

	});
	poster2.addEventListener('click', () => {
		modal_value = 'poster_2';
		openModal();
		shadow();
		clearModal();

	});
	poster3.addEventListener('click', () => {
		modal_value = 'poster_3';
		openModal();
		shadow();
		clearModal();

	});
}


function openModal(){
	let modal_container = document.getElementById('modal-container');
	let body = document.getElementById('body');

	let poster1_HTML = poster1ModalHTML();
	let poster2_HTML = poster2ModalHTML();
	let poster3_HTML = poster3ModalHTML();

	switch(modal_value){
		case "poster_1":
		modal_container.innerHTML = poster1_HTML;
		setTimeout( () => {
				modal_container.querySelector('.poster-container').style.opacity = 1;
			}, 0);
		
		break;
		case "poster_2":
		modal_container.innerHTML = poster2_HTML;
		setTimeout( () => {
				modal_container.querySelector('.poster-container').style.opacity = 1;
			}, 0);
		break;
		case "poster_3":
		modal_container.innerHTML = poster3_HTML;
		setTimeout( () => {
				modal_container.querySelector('.poster-container').style.opacity = 1;
			}, 0);
		break;
	}
}



function poster1ModalHTML(){
	let rawTemplate = document.getElementById("poster-1").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}
function poster2ModalHTML(){
	let rawTemplate = document.getElementById("poster-2").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}
function poster3ModalHTML(){
	let rawTemplate = document.getElementById("poster-3").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}




