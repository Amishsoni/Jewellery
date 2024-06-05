<?php include 'header.php'; ?>
<?php include 'hero.php'; ?>
<?php include 'latestCollection.php'; ?>
<?php include 'selling.php'; ?>
<?php include 'journal.php'; ?>
  <?php include 'footer.php'; ?>
  <!-- <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
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
                        <span class="card-title d-block" style="color:#F4D70F; font-size:13px; text-transform:uppercase">${card.title}</span>
                        <p class="card-text" style="font-size:22px; font-weight:500">${card.text}</p>
                        <p class="card-text" style="font-size:13px; color: #696969; font-weight:500">${card.word}</p>
                        <p class="card-text" style="font-size:13px; color: #696969; font-weight:500">${card.date}</p>
                    </div>
                </div>
            </div>
            `;
      }

      function arrangeCards(infinite) {
        const carouselInner = document.querySelector(".carousel-inner");
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
    </script> -->
<!-- section 5 "Flex Images " End -->




 
