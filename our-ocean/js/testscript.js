
console.log('hello');

function createBubble() {
		
		//Bubble animation
		const container = document.getElementById('container');
		const bubble = document.createElement('span');

		let size = Math.random() * 60;

		bubble.style.width = size + 'px';
		bubble.style.height = size + 'px';
		bubble.style.left = Math.random() * innerWidth + 'px';
		container.appendChild(bubble);

		setTimeout(() => {
			bubble.remove()
		},7000) 
	}

	setInterval(createBubble, 1100);

