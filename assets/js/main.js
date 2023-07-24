/*let files = [],
form = document.querySelector('form');
container = document.querySelector('content_img');
text = document.querySelector('.inner');
browse = document.querySelector('.select');
input = document.querySelector('form input');

browse.addEventListener('click', () => input.click());
//input change event
input.addEventListener('change', () => {
	let file = input.files;
	for(let i=0; i<file.lenght; i++){
		files.push(file[i]);
	}
	form.reset();
	showImages();
})

const showImages = () =>{
	let images = '';
	files.forEach( (e, i) => {
		images += `<div class="image" >
                     <img src="${URL.createObjectURL(e)}" alt="image">
                     <span onclick="delImage(${i})">&times;</span>
                  </div>`
	})
	container.innerHTML = images;
}*/