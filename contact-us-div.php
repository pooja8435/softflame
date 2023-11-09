<!doctype html>

<html lang="en">

<head>

    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300;400;700&family=Poppins:wght@200;400;600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/web-development-design.css" type="text/css" />
    <link rel="stylesheet" href="css/text-animation.css" type="text/css" />
    <script>
        var Animation = function ({ offset } = { offset: 10 }) {
            var _elements;

            // Define a dobra superior, inferior e laterais da tela
            var windowTop = offset * window.innerHeight / 100;
            var windowBottom = window.innerHeight - windowTop;
            var windowLeft = 0;
            var windowRight = window.innerWidth;

            function start(element) {
                // Seta os atributos customizados
                element.style.animationDelay = element.dataset.animationDelay;
                element.style.animationDuration = element.dataset.animationDuration;
                // Inicia a animacao setando a classe da animacao
                element.classList.add(element.dataset.animation);
                // Seta o elemento como animado
                element.dataset.animated = "true";
            }

            function isElementOnScreen(element) {
                // Obtem o boundingbox do elemento
                var elementRect = element.getBoundingClientRect();
                var elementTop =
                    elementRect.top + parseInt(element.dataset.animationOffset) ||
                    elementRect.top;
                var elementBottom =
                    elementRect.bottom - parseInt(element.dataset.animationOffset) ||
                    elementRect.bottom;
                var elementLeft = elementRect.left;
                var elementRight = elementRect.right;

                // Verifica se o elemento esta na tela
                return (
                    elementTop <= windowBottom &&
                    elementBottom >= windowTop &&
                    elementLeft <= windowRight &&
                    elementRight >= windowLeft
                );
            }

            // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
            function checkElementsOnScreen(els = _elements) {
                for (var i = 0, len = els.length; i < len; i++) {
                    // Passa para o proximo laço se o elemento ja estiver animado
                    if (els[i].dataset.animated) continue;

                    isElementOnScreen(els[i]) && start(els[i]);
                }
            }

            // Atualiza a lista de elementos a serem animados
            function update() {
                _elements = document.querySelectorAll(
                    "[data-animation]:not([data-animated])"
                );
                checkElementsOnScreen(_elements);
            }

            // Inicia os eventos
            window.addEventListener("load", update, false);
            window.addEventListener("scroll", () => checkElementsOnScreen(_elements), { passive: true });
            window.addEventListener("resize", () => checkElementsOnScreen(_elements), false);

            // Retorna funcoes publicas
            return {
                start,
                isElementOnScreen,
                update
            };
        };

        // Initialize
        var options = {
            offset: 20 //percentage of window
        };
        var animation = new Animation(options);
    </script>
    
    <style>
        .bg-contact{
            background: aliceblue;
        }
        .contact-img {
            height: 250px;
            margin-left: 45px;
        }

        .contact-btn {
            color: white;
            border-radius: 20px;
            background: linear-gradient(to right, rgba(255, 175, 75, 1) 0%, rgba(240, 81, 24, 1) 68%, rgba(240, 81, 24, 1) 100%);
        }
        .fa-arrow-right{
            margin-left: 16px;
        }
    </style>


</head>
<section class="sec-padding bg-contact">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8" data-animation="zoomIn" data-animation-delay="300ms">
                        <h1 class="header-font ">Let's Discuss Your Web Development Needs</h1>
                        <p class="text-font">Ready to take your online presence to the next level? Get in touch with us
                            today to discuss
                            your web development project. We're eager to learn more about your business and help you
                            achieve your online goals.</p>
                        <p class="text-font">Contact us to schedule a consultation, request a quote, or learn more about
                            our web
                            development services. Your success is our priority, and we're here to make it happen.</p>
                            <button type="button" class="btn contact-btn header-font"
                    onclick="window.location.href='contact.php'">Let's Connect</button>
                    </div>
                    <div class="col-md-4">
                        <img data-animation="slideInRight" class="contact-img" src="images/contact-us.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>