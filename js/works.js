gsap.registerPlugin(ScrollTrigger);

const pageContainer = document.querySelector("#container");

/* SMOOTH SCROLL */
const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true,
});

scroller.on("scroll", ScrollTrigger.update);

ScrollTrigger.scrollerProxy(pageContainer, {
  scrollTop(value) {
    return arguments.length
      ? scroller.scrollTo(value, 0, 0)
      : scroller.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      left: 0,
      top: 0,
      width: window.innerWidth,
      height: window.innerHeight,
    };
  },
  pinType: pageContainer.style.transform ? "transform" : "fixed",
});

// //스르륵 등장
// const options = {
//   root: null,
//   rootMargin: "0px",
//   threshold: 0.9,
// };

// let revealCallback = (entries, self) => {
//   entries.forEach((entry) => {
//     let container = entry.target;
//     let img = entry.target.querySelector("li.card");
//     const easeInOut = "power3.out";
//     const revealAnim = gsap.timeline({ ease: easeInOut });

//     if (entry.isIntersecting) {
//       revealAnim.set(container, {
//         visibility: "visible",
//       });
//       revealAnim.fromTo(
//         container,
//         {
//           clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
//           webkitClipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
//         },
//         {
//           clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
//           webkitClipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
//           duration: 1,
//           ease: easeInOut,
//         }
//       );
//       revealAnim.from(img, 4, {
//         scale: 1.4,
//         ease: easeInOut,
//         delay: -1,
//       });
//       self.unobserve(entry.target);
//     }
//   });
// };

// let revealObserver = new IntersectionObserver(revealCallback, options);

// document.querySelectorAll("li.card").forEach((reveal) => {
//   revealObserver.observe(reveal);
// });
                                                                                                                                       