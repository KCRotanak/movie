<html>
<style>
        * {
  padding: 0;
  margin: 0;
  font-family: sans-serif;
}
a{
    color: aliceblue;
    font-size: 12pt;
}
.container {
  height: 100vh;
  overflow-x: hidden;
}

.space {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  background-color: black;
}

.space > .star {
  position: absolute;
  background-color: white;
  border-radius: 50%;
}

.space > .code {
  color: white;
  font-weight: 700;
  font-size: 64pt;
  text-align: center;
  transform-origin: 50% 50%;
  animation: cubic-bezier(0.000, 0.995, 0.050, 1.000) code-enter 3s, linear code-rotate 30s infinite;
}

.space > .message {
  position: absolute;
  top: 70%;
  color: white;
  font-size: 32pt;
  font-weight: 700;
  text-align: center;
}

@keyframes code-enter {
  0% { margin-right: 200%; }
  20% { margin-right: 200%; }
  100% { margin-right: 0%; }
}

@keyframes code-rotate {
  0%   { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<body>
    <div class="container">
        <div class="space">
          <div class="code">404 </a><img src="https://media0.giphy.com/media/j4fbBhYgu8mNEHkQ4w/200.gif" alt=""style="max-width: 30%;  "><br>
            <a href="/">Back Home
          </div>
          <br><br><br><br><br>
          <div class="message">
            
          </div>
        </div>
      </div>

    <script>
document.addEventListener('DOMContentLoaded', () => {
	// init variables
	const spaceElement = document.querySelector('.container > .space');
  const spaceWidth = spaceElement.clientWidth;
  const messageElement = spaceElement.querySelector('.message');
  const message = 'Page Not Found';
  let messageIndex = 0;
  
  const starCount = 100;
  const starMinSize = 1;
  const starMaxSize = 5;
  const stars = new Array(starCount).fill(undefined).map(() => {
  	const element = document.createElement('div');
    const left = Math.floor(Math.random() * 100) + 1;
    const top = Math.floor(Math.random() * 100) + 1;
    const size = Math.floor(Math.random() * starMaxSize) + starMinSize;
    const speed = -size / spaceWidth * 20;
    
    element.classList.add('star');
    element.style.left = left + '%';
    element.style.top = top + '%';
    element.style.width = element.style.height = size + 'px';
    spaceElement.appendChild(element);
    
    return {
			element,
      left,
      top,
      size,
      speed
		}
  });
  
  // update stars
  setInterval(function () {
  	for (const star of stars) {
    	star.left += star.speed;
			star.element.style.left = star.left + '%';
      if (star.element.offsetLeft + star.size < 0) {
      	star.element.style.left = '100%';
        star.left = 100;
      }
		}
  }, 0);
  
  function typeMessage() {
  	messageElement.textContent += message.substring(messageIndex, messageIndex + 1);
  }
  setTimeout(() => {
  	// type message after code is shown;
    const typeInterval = setInterval(() => {
      messageElement.textContent += message.substring(messageIndex, messageIndex + 1);
      if (++messageIndex >= message.length) {
        clearInterval(typeInterval);
      }
    }, 100); 		
  }, 2000);
});
    </script>
</body>

</html>
