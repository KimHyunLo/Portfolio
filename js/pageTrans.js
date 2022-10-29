window.onload = () => {
  //page
  gsap.fromTo(
    ".pageLoad .text__box .text span",
    {
      y: -100,
      opacity: 1,
    },
    {
      y: 0,
      duration: 1,
      stagger: -0.05,
      ease: Expo.easeInOut,
    }
  );
  gsap.fromTo(
    ".pageLoad .text__box .underline",
    {
      width: 0,
    },
    {
      width: "100%",
      duration: 1,
      delay: 1.3,
      ease: Expo.easeInOut,
    }
  );
  gsap.to(".pageLoad .text__box .text span", {
    y: 100,
    duration: 1,
    stagger: -0.05,
    ease: Expo.easeInOut,
    delay: 2.3,
  });
  gsap.to(".pageLoad .text__box .underline", {
    width: 0,
    duration: 1,
    delay: 3.3,
    ease: Expo.easeInOut,
  });
  gsap.fromTo(
    ".pageLoad .lines .line",
    {
      width: "100%",
    },
    {
      width: 0,
      stagger: 0.1,
      ease: Expo.easeInOut,
      duration: 2,
      delay: 4.3,
    }
  );
  setTimeout(() => {
    $(".pageLoad").css("z-index", "-1");
  }, 6500);

  //common
  gsap.fromTo(
    "#title span",
    {
      y: 400,
    },
    {
      y: 0,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 5.5,
    }
  );
  gsap.fromTo(
    "#header",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6,
    }
  );
  gsap.fromTo(
    "#menu",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6,
    }
  );

  // index
  gsap.fromTo(
    ".star",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );
  gsap.fromTo(
    ".vector",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6,
    }
  );
  gsap.fromTo(
    "#footer__sns",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );
  gsap.fromTo(
    "#work__inner",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );

  // about
  gsap.fromTo(
    ".about__inner",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );

  // works
  gsap.fromTo(
    "#footer__text",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );

  // scripts
  gsap.fromTo(
    "#scripts__carousel",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );

  // contact
  gsap.fromTo(
    ".contact__box",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );

  // board
  gsap.fromTo(
    ".board",
    {
      y: 10,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: Power3.easeInOut,
      delay: 6.5,
    }
  );
};

// 버튼 클릭
$(".link").click((e) => {
  e.preventDefault();
  $(".pageLoad").css("z-index", "10");
  gsap.fromTo(
    ".pageLoad .lines .line",
    {
      width: 0,
    },
    {
      width: "100%",
      stagger: -0.1,
      ease: Expo.easeInOut,
      duration: 2,
    }
  );
  setTimeout(() => {
    location.href = `${e.currentTarget.name}.php`;
  }, 2500);
});
