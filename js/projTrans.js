window.onload = () => {
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
    }
  );
  setTimeout(() => {
    $(".pageLoad").css("z-index", "-1");
  }, 2000);
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
