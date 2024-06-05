<!-- section 4 "OUR JOURNAL" start -->
<section class="journal-div">
  
  <div class="our_journal_blogs">
  <div>
    <h5>OUR Journal</h5>
    <h2 class="decorated">
        <img src="./assets/images/border/border.png" alt="border" width="120px">
      </h2>
    </div>
    <div class="container carousal-div mt-3">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner1">
        <!-- The cards will be inserted here by JavaScript -->
      </div>
      <button
        class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
  </div>
</section>
<hr class="">
<!-- section 4 "OUR JOURNAL" End -->

<!-- section 5 "Flex Images " start -->
<div class="container mb-5 mt-5">
    <div class="row justify-content-between align-items-center">

      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex1.png" alt="Image 1">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex2.png" alt="Image 2">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex3.png" alt="Image 3">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex4.png" alt="Image 4">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex5.png"  alt="Image 5">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex6.png" alt="Image 6">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex7.png" alt="Image 7">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex8.png" alt="Image 8">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-1 ">
        <div class="logos-div">
        <img src="assets/images/black&white/flex9.png" alt="Image 9">
        </div>
      </div>
    </div>
  </div>

  <script>
      const cards = [
        {
          title: "Blogroll",
          text: "New Retro Collection of Pendants and Ring sets",
          word: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra, mi id rhoncus ultricies, magna eros ultricies leo,",
          date: "by <b>Marry Loue</b> on <b>Auguest 15, 2018</b>",
          img: "assets/images/card/blog1.png",
        },
        {
          title: "Blogroll",
          text: "New Retro Collection of Pendants and Ring sets",
          word: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra, mi id rhoncus ultricies, magna eros ultricies leo,",
          date: "by <b>Marry Loue</b> on <b>Auguest 15, 2018</b>",
          img: "assets/images/card/blog2.png",
        },
        {
          title: "Blogroll",
          text: "New Retro Collection of Pendants and Ring sets",
          word: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra, mi id rhoncus ultricies, magna eros ultricies leo,",
          date: "by <b>Marry Loue</b> on <b>Auguest 15, 2018</b>",
          img: "assets/images/card/blog3.png",
        },
        {
          title: "Blogroll",
          text: "New Retro Collection of Pendants and Ring sets",
          word: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra, mi id rhoncus ultricies, magna eros ultricies leo,",
          date: "by <b>Marry Loue</b> on <b>Auguest 15, 2018</b>",
          img: "assets/images/card/blog4.png",
        },
        {
          title: "Blogroll",
          text: "New Retro Collection of Pendants and Ring sets",
          word: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra, mi id rhoncus ultricies, magna eros ultricies leo,",
          date: "by <b>Marry Loue</b> on <b>Auguest 15, 2018</b>",
          img: "assets/images/card/blog5.png",
        },
        {
          title: "Blogroll",
          text: "New Retro Collection of Pendants and Ring sets",
          word: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra, mi id rhoncus ultricies, magna eros ultricies leo,",
          date: "by <b>Marry Loue</b> on <b>Auguest 15, 2018</b>",
          img: "assets/images/card/blog6.png",
        },
      ];

      function createCard(card) {
        return `
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="${card.img}" class="card-img-top" alt="${card.title}">
                    <div class="card-body text-center">
                        <span class="card-title d-block" style="color:#F4D70F; font-size:13px; text-transform:uppercase; font-family: 'poppins';">${card.title}</span>
                        <p class="card-text" style="font-size:22px; font-weight:500;font-family: 'Butler';">${card.text}</p>
                        <p class="card-text" style="font-size:13px; color: #C9C9C9; font-weight:500 font-family: 'poppins'">${card.word}</p>
                        <p class="card-text" style="font-size:13px; color: #696969; font-weight:500 font-family: 'poppins'">${card.date}</p>
                    </div>
                </div>
            </div>
            `;
      }

      function arrangeCards(infinite) {
        const carouselInner = document.querySelector(".carousel-inner1");
        carouselInner.innerHTML = ""; // Clear existing items

        const screenWidth = window.innerWidth;
        let itemsPerSlide;

        if (screenWidth >= 992) {
          // Large screens
          itemsPerSlide = 3;
        } else if (screenWidth >= 768) {
          // Medium screens
          itemsPerSlide = 2;
        } else {
          // Small screens
          itemsPerSlide = 1;
        }

        let slides = [];
        for (let i = 0; i < cards.length; i += itemsPerSlide) {
          let slideCards = cards
            .slice(i, i + itemsPerSlide)
            .map(createCard)
            .join("");
          slides.push(`
                    <div class="carousel-item ${i === 0 ? "active" : ""}">
                        <div class="row">
                            ${slideCards}
                        </div>
                    </div>
                `);
        }

        if (infinite) {
          // Ensure the last slide has the remaining cards for proper loop
          const remainingCards = slides[slides.length - 1];
          const lastSlide = `
                    <div class="carousel-item">
                        <div class="row">
                            ${remainingCards}
                        </div>
                    </div>
                `;
          slides.push(lastSlide);
        }

        carouselInner.innerHTML = slides.join("");
      }

      window.addEventListener("resize", () => arrangeCards(false)); // Ensure it's infinite by default
      document.addEventListener("DOMContentLoaded", () => arrangeCards(false)); // Ensure it's infinite by default
    </script>