

(function() {

	// Add and remove open class to menu button
	const menuBtn = document.querySelector('.menu-btn');
	let menuOpen = false;
	menuBtn.addEventListener('click', () => {
		if(!menuOpen) {
			menuBtn.classList.add('open');
			menuOpen = true;
		} else {
			menuBtn.classList.remove('open');
			menuOpen = false;
		}
	})

	let proxy = { skew: 0 },
    skewSetter = gsap.quickSetter(".skewElem", "skewY", "deg"), // fast
    clamp = gsap.utils.clamp(-10, 10); // don't let the skew go beyond 20 degrees. 

	ScrollTrigger.create({
	  onUpdate: (self) => {
	    let skew = clamp(self.getVelocity() / -300);
	    // only do something if the skew is MORE severe. Remember, we're always tweening back to 0, so if the user slows their scrolling quickly, it's more natural to just let the tween handle that smoothly rather than jumping to the smaller skew.
	    if (Math.abs(skew) > Math.abs(proxy.skew)) {
	      proxy.skew = skew;
	      gsap.to(proxy, {skew: 0, duration: 0.8, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
	    }
	  }
	});

	// make the right edge "stick" to the scroll bar. force3D: true improves performance
	gsap.set(".skewElem", {transformOrigin: "right center", force3D: true});
 


	gsap.utils.toArray('.slide').forEach(layer => {
	  
	  ScrollTrigger.create({
	    trigger: layer,
	    pin: true,
	    start: 'top top',
	    pinSpacing: false,
	  });
	});

		gsap.to("#slide-1-img", {
			scrollTrigger:  {
				trigger: "#slide-1-img",
				toggleActions: "restart pause reverse pause",
				start: "top bottom",
				end: "top 0",
				scrub: 1,
				// pin: true,
				
			},
			// y: -300,
			x: -10, 
			// duration: 3
		}); //close gsap to

		gsap.to("#slide-2-img", {
			scrollTrigger:  {
				trigger: "#slide-2-img",
				toggleActions: "restart pause reverse pause",
				start: "top bottom",
				end: "top 0",
				scrub: 1,	
			},
			x: 15, 
		}); //close gsap to

		gsap.to("#slide-3-img", {
			scrollTrigger:  {
				trigger: "#slide-3-img",
				toggleActions: "restart pause reverse pause",
				start: "top bottom",
				end: "top 0",
				scrub: 1,
				
				
			},
			// y: -300,
			scale: 1,
			x: -15, 
			duration: 1
		}); //close gsap to
	


gsap.to(".scroll", {
		scrollTrigger:  {
			trigger: ".slide-final",
			toggleActions: "play none none reverse",
			start: "bottom bottom",
			end: "50px 60%",
			scrub: true,
			// markers: true
		},
		opacity:0,
		duration: 1
	});

	gsap.to("#take-action-landing", {
		scrollTrigger:  {
			trigger: ".slide-final",
			toggleActions: "play none none reverse",
			start: "bottom bottom",
		 	end: "50px 60%",
			scrub: true,
			// markers: true
		},
		opacity:1,
		duration: 1
	});

	


})();