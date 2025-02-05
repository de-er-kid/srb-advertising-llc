// $(document).ready(function() {
jQuery(document).ready(function ($) {
  let locoScroll;
  function initLoco() {
    let options = {
      el: document.querySelector("[data-scroll-container]"),
      smooth: true,
      getSpeed: true,
      getDirection: true,
      reloadOnContextChange: true,
    };
    const header = document.querySelector("header");
    locoScroll = new LocomotiveScroll(options);
    locoScroll.on("scroll", (instance) => {
      let headerHeight = header.getBoundingClientRect().height;
      if (instance.scroll.y > headerHeight) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  }
  $(".lightgallery").lightGallery({ download: false });
  $(".banslider").slick({
    fade: true,
    slidesToShow: 1,
    infinite: true,
    arrows: false,
    prevArrow:
      '<button type="button" class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="bi bi-chevron-right"></i></button>',
    speed: 500,
    dots: false,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    pauseOnFocus: false,
    pauseOnDotsHover: false,
  });
  $(".clientslider").slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: "linear",
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false,
  });
  $(".testislider").slick({
    fade: true,
    slidesToShow: 1,
    infinite: true,
    arrows: true,
    prevArrow:
      '<button type="button" class="slick-prev"><i class="bi bi-arrow-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="bi bi-arrow-right"></i></button>',
    speed: 500,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3000,
  });
  $(".menuicon").click(function (e) {
    $("body").toggleClass("menuopen");
  });
  $("html").click(function (e) {
    if (!$(e.target).closest(".menuicon,.navbar .navbar-nav").length) {
      $("body").removeClass("menuopen");
    }
  });
  $(".scrolltotop").on("click", function (e) {
    locoScroll.scrollTo("top", { offset: 0 });
  });
  $(".scrolldown").on("click", function (e) {
    locoScroll.scrollTo("#about", { duration: 100, offset: 0 });
  });
  var myCursor = $(".srb-cursor");
  if (myCursor.length) {
    if ($("body").length) {
      const e = document.querySelector(".cursor-inner"),
        t = document.querySelector(".cursor-outer");
      var n,
        i = 0,
        W = 0,
        intro = 0,
        o = !1;

      var buttons =
        "a, button, .active-progress, .search-click, .action-menu, .swiper-button-next, .swiper-button-prev";
      var remove_cursor =
        ".learn-more-btn, .swiper-slider-main-main-wrapper-portfolio .thumbnail, .single-portfolio-style-five a, .mySwiper_portfolio-5-scale-none a";

      (window.onmousemove = function (s) {
        o ||
          (t.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (e.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (n = s.clientY),
          (i = s.clientX);
      }),
        $("body").on("mouseenter", buttons, function () {
          e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
        }),
        $("body").on("mouseleave", buttons, function () {
          ($(this).is("a") && $(this).closest(".cursor-link").length) ||
            (e.classList.remove("cursor-hover"),
            t.classList.remove("cursor-hover"));
        }),
        (e.style.visibility = "visible"),
        (t.style.visibility = "visible");
      // slider mouse enter
      var mightyBody = jQuery("body");
      mightyBody
        .on("mouseenter", remove_cursor, function () {
          e.classList.add("cursor-remove");
          t.classList.add("cursor-remove");
        })
        .on("mouseleave", remove_cursor, function () {
          e.classList.remove("cursor-remove");
          t.classList.remove("cursor-remove");
        });
    }
  }
  var x = 1;
  if ($(".splitline").length) {
    $(".splitline").each(function () {
      if ($(".splitline" + x).length) {
        var splitarr = extractLinesFromTextNode(
          document.querySelector(".splitline" + x).firstChild
        );
        $(this).html(splitarr.join(" "));
        x++;
      }
    });
  }
  let elements = document.querySelectorAll(".rolltxt,.splitxt");
  elements.forEach((element) => {
    let innerText = element.innerText;
    element.innerHTML = "";
    let textContainer = document.createElement("div");
    textContainer.classList.add("block");
    var n = 5;
    for (let letter of innerText) {
      let span = document.createElement("span");
      span.innerText = letter.trim() === "" ? "\xa0" : letter;
      span.classList.add("letter");
      textContainer.appendChild(span);
      span.style.top = n + "px";
      n += 5;
    }
    element.appendChild(textContainer);
    if (element.classList.contains("rolltxt"))
      element.appendChild(textContainer.cloneNode(true));
  });
  var q = 0.01;
  $(".galitem").each(function () {
    $(this)
      .find("span")
      .css("transition-delay", q + "s");
    q = q + 0.01;
  });
  $(".animlist").each(function () {
    var m = 5;
    var l = 0.05;
    $(this)
      .find("li")
      .each(function () {
        $(this).css({ top: m + "px", "transition-delay": l + "s" });
        m = m + 5;
        l = l + 0.05;
      });
  });
  setTimeout(() => {
    $(".loading-container").addClass("close");
    setTimeout(() => {
      $(".loading-container").remove();
      initLoco();
    }, 500);
  }, 1500);
  $("#storydiv").css(
    "margin-left",
    ($(window).width() - $(".container").width()) / 2
  );
  $(window).resize(function () {
    $("#storydiv").css(
      "margin-left",
      ($(window).width() - $(".container").width()) / 2
    );
  });
  $(".subservlist a").click(function (e) {
    e.preventDefault();
    $(".subservlist a").removeClass("activetab");
    $(".subservbox").removeClass("active").removeClass("activetab");
    $(this).addClass("activetab");
    $($(this).data("target")).addClass("activetab");
    locoScroll.scrollTo($(this).data("target"), {
      duration: 100,
      offset: -150,
    });
    setTimeout(() => {
      locoScroll.update();
      updateLoco();
    }, 500);
  });
  $(".portmenu a").click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(".portmenu a").removeClass("active");
    $(this).addClass("active");
    var target = $(this).data("filter");
    if (target == "all") {
      $(".galgrid").fadeIn(100);
    } else {
      $(".galgrid").fadeOut(100);
      $(".galgrid" + target).fadeIn(100);
    }
    setTimeout(() => {
      locoScroll.update();
      updateLoco();
    }, 500);
  });
  function updateLoco() {
    locoScroll.update();
  }
  $(".carbox a").on("click", function (e) {
    var carmodal = new bootstrap.Modal(document.getElementById("carmodal"));
    $("#carmodal").find('select[name="job"]').val($(this).attr("data-id"));
    carmodal.show();
  });
  $(document).on("submit", "#cntform", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var curr = $(this);
    var sbmtbtn = curr.find('button[type="submit"]');
    var ctxt = sbmtbtn.html();
    sbmtbtn.html("Please Wait").attr("disabled", true);
    $.ajax({
      type: "POST",
      url: curr.attr("action"),
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      dataType: "json",
      success: function (data) {
        // console.log(JSON.stringify(data));
        curr.find(".error").html(data[1]);
        locoScroll.scrollTo("#cntform", { duration: 100, offset: -150 });
        if (data[0] == 1) curr[0].reset();
        sbmtbtn.html(ctxt).attr("disabled", false);
        setTimeout(function () {
          $("#cntform .error .alert").not(".nofadealert").fadeOut("fast");
        }, 6000);
      },
    });
  });
});
function extractLinesFromTextNode(textNode) {
  if (textNode.nodeType !== 3) {
    throw new Error("Lines can only be extracted from text nodes.");
  }
  var textContent = collapseWhiteSpace(textNode.textContent);
  var range = document.createRange();
  var lines = [];
  var lineCharacters = [];
  for (var i = 0; i < textContent.length; i++) {
    range.setStart(textNode, 0);
    range.setEnd(textNode, i + 1);
    var lineIndex = range.getClientRects().length - 1;
    if (!lines[lineIndex]) {
      lines.push((lineCharacters = []));
    }
    lineCharacters.push(textContent.charAt(i));
  }
  lines = lines.map(function operator(characters) {
    return (
      '<span class="splitxt">' +
      collapseWhiteSpace(characters.join("")) +
      "</span>"
    );
  });
  drawRectBoxes(range.getClientRects());
  return lines;
}
function collapseWhiteSpace(value) {
  return value.trim().replace(/\s+/g, " ");
}
function drawRectBoxes(clientRects) {
  arrayFrom(document.querySelectorAll(".box")).forEach(function iterator(node) {
    node.remove();
  });
  arrayFrom(clientRects).forEach(function iterator(rect) {
    var box = document.createElement("div");
    box.classList.add("box");
    box.style.top = rect.y + "px";
    box.style.left = rect.x + "px";
    box.style.width = rect.width + "px";
    box.style.height = rect.height + "px";
    document.body.appendChild(box);
  });
}
function logLines(lines) {
  console.group("Rendered Lines of Text");
  lines.forEach(function iterator(line, i) {
    console.log(i, line);
  });
  console.groupEnd();
}
function arrayFrom(arrayLike) {
  return Array.prototype.slice.call(arrayLike);
}
