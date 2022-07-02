@extends('client.layouts.master')
@section('head')
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <title>MinaLashes &mdash; Ihr Wimpernverlangerung und WarmWaxing studio in Zürich!</title>
@endsection
@section('content')
    <section class="section-hero">
        <div class="hero">
            <div class="hero-text-box">
                <h1 class="heading-primary">
                    Ihr zertifizierter Wimpernkünstler in Zürich
                </h1>
                <p class="hero-description">
                    die zertifizierte EU-Wimpernkosmetikerin, die Ihre Wimpern
                    wieder schön und gesund macht. Abgestimmt auf Ihren persönlichen Augenaufschlag
                    und Schönheitsbedürfnisse.
                </p>
                <a href="#cta" class="btn btn--full margin-right-sm"
                >Wimpern richtig machen 👇</a
                >

                <a href="#how" class="btn btn--outline">Mehr erfahren &darr;</a>
                <div class="delivered-meals">
                    <div class="delivered-imgs">
                        <img src="img/pics/Wimpernverlangerung-wispyset-client-minalashes.jpg" alt="Wimpernverlangerung wispyset client minalashes" />
                        <img src="img/pics/Schone-kundin-neuset-volume-wimperverlangerung-bei-Minalashes.jpg" alt="eine schone Kundin newset volume bei Mina Lashes & Beauty" />
                        <img src="img/pics/Wimpernverlangerung-Kundin-neuset-Klassic-bei-Minalashes-beauty.jpg" alt="Wimpernverlangerung wispyset client minalashes" />
                        <img src="img/pics/Kundin-wimperverlangerung-bei-Minalashes.jpg" alt="Kundin wimperverlangerung bei-Minalashes" />
                        <img src="img/pics/Schone-kundin-neuset-volume-wimperverlangerung-bei-Minalashes.png" alt="Wimpernverlangerung wispyset client minalashes" />
                        <img src="img/pics/Wimpernverlangerung-volume-set-kundin-bei-Minalashes-beauty.jpg" alt="Wimpernverlangerung volume set kundin bei Mina lashes & beauty" />
                    </div>
                    <p class="delivered-text">
                        <span>500+</span> Kunden im letzten Jahr geliefert!
                    </p>
                </div>
            </div>
            <div class="hero-img-box">
                <picture>
                    <!-- <source srcset="img/hero.webp" type="image/webp" /> -->
                    <source srcset="img/pics/Natural-wimpernverlangerung-poster-clients-mina-lashes.jpg" type="image/jpg" />

                    <img
                        src="img/pics/Natural-wimpernverlangerung-poster-clients-mina-lashes.jpg"
                        class="hero-img"
                        alt="Schöne Mädchen mit fertigen Wimpern"
                    />
                </picture>
            </div>
        </div>
    </section>

    <section class="section-how" id="how">
        <div class="container">
            <span class="subheading">Wie es funktioniert</span>
            <h2 class="heading-secondary">
                Ihre Wimpernbehandlung wird in 3 einfachen Schritten vorbereitet
            </h2>
        </div>

        <div class="container grid grid--2-cols grid--center-v">
            <!-- STEP 01 -->
            <div class="step-text-box">
                <p class="step-number">01</p>
                <h3 class="heading-tertiary">
                    Sagen Sie uns, was Sie mögen (und was nicht)
                </h3>
                <p class="step-description">
                    Sprechen Sie mit uns und lassen Sie die Sorgen zurück! Unser Künstler wird Ihnen zuhören
                    und kreiert einen 100% persönlichen Stil, der zu Ihnen passt. Er stellt sicher
                    dass Sie alle Lentgh und Kurven bekommen, die Sie brauchen. Dies ist ein wichtiger Schritt
                    um ein optimales Ergebnis zu erzielen.
                </p>
            </div>

            <div class="step-img-box">
                <img
                    src="img/pics/Wimpernverlangerung-Kundin-neuset-Klassic-bei-Minalashes-beauty.jpg"
                    class="step-img"
                    alt="Sprechen Sie Uns was machen Sie und wimpern richtig machen"
                />
            </div>

            <!-- STEP 02 -->
            <div class="step-img-box">
                <img
                    src="img/pics/Mina_lashes_form.png"
                    class="step-img"
                    alt="wimpern plan"
                />
            </div>
            <div class="step-text-box">
                <p class="step-number">02</p>
                <h3 class="heading-tertiary">Genehmigen Sie Ihren Wimpernplan</h3>
                <p class="step-description">
                    Bei Ihrem ersten Besuch werden wir Ihre Referenzdaten aufzeichnen
                    Informationen auf und speichern sie, so dass wir beim nächsten Mal die
                    Kundenerfahrung zu verbessern und unsere Qualität zu steigern.
                    unsere Qualität verbessern.
                </p>
            </div>

            <!-- STEP 03 -->
            <div class="step-text-box">
                <p class="step-number">03</p>
                <h3 class="heading-tertiary">Ein frei Nickerchen machen  🥰</h3>
                <p class="step-description">
                    Unsere Wimpernkünstlerin wird während der Sitzung arbeiten, Sie können schlafen,
                    essen, plaudern oder einfach nur Musik hören. Nach 1 Stunde bis 1 Stunde 30
                    Minuten wachen Sie frisch auf und genießen Ihre neuen Wimpern.  😍😍😍
                </p>
            </div>
            <div class="step-img-box">
                <img
                    src="img/pics/mina_step_3.webp"
                    class="step-img"
                    alt="wimpern ist schon fertig"
                />
            </div>
        </div>
    </section>

    <section class="section-meals" id="meals">
        <div class="container center-text">
            <span class="subheading">Dienstleistungen</span>
            <h2 class="heading-secondary">
                Mina wählt die besten und hochwertigsten Rezepte in der EU aus.
            </h2>
        </div>

        <div class="container grid grid--3-cols margin-bottom-md">
            <div class="meal">
                <img
                    src="img/pics/mina_lashes_services.jpg"
                    class="meal-img"
                    alt="Mina lashes and beauty dienstleistungen"
                />
                <div class="meal-content">
                    <div class="meal-tags">
                        <span class="tag tag--vegetarian">Wimpern</span>
                    </div>
                    <p class="meal-title">Wimpernverlängerung</p>
                    <ul class="meal-attributes">
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                            <span><strong>100%</strong> handgefertigt</span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon
                                class="meal-icon"
                                name="restaurant-outline"
                            ></ion-icon>
                            <span>Garantie <strong>5</strong> Tage</span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                            <span><strong>4.9</strong> Bewertung (137)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="meal">
                <img
                    src="img/pics/mina_waxing_services.jpg"
                    class="meal-img"
                    alt="mina hot waxing"
                />
                <div class="meal-content">
                    <div class="meal-tags">
                        <!-- <span class="tag tag--vegan">Waxing</span> -->
                        <span class="tag tag--paleo">Waxing</span>
                    </div>
                    <p class="meal-title">Heißes Waxing</p>
                    <ul class="meal-attributes">
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                            <span>Glatt wie Seide</span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon
                                class="meal-icon"
                                name="restaurant-outline"
                            ></ion-icon>
                            <span>Bio &reg; <strong>Coconut</strong> wax</span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                            <span><strong>4.8</strong> rating (91)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="diets">
                <h3 class="heading-tertiary">Arbeiten im Detail:</h3>
                <ul class="list">
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Klassischer 1:1-Look </span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Hybrid Classic - Volume look</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Volume look </span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Wispy look</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Wimpern entfernen  </span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Warm waxing bikini</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Warm waxing Arm - Bein</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Warm waxing Brust - Rücken</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Warm waxing Achsel - Lippen</span>
                    </li>
                </ul>
            </div>
        </div>

        <section class="section-testimonials" id="testimonials">
            <div class="testimonials-container">
                <span class="subheading">Testimonials</span>
                <h2 class="heading-secondary">Once you try it, you can't go wrong</h2>

                <div class="testimonials">
                    <figure class="testimonial">
                        <img
                            class="testimonial-img"
                            alt="Kundin macht gut bewertungen mina lashes & beauty"
                            src="img/pics/Kundin-Bewertungen-minalashes.jpg"
                        />
                        <blockquote class="testimonial-text">
                            Preiswert, persönliche Note und toller Geschmack, ich fühle mich wirklich magisch.
                        </blockquote>
                        <p class="testimonial-name">&mdash; Alexandra Schilefe</p>
                    </figure>

                    <figure class="testimonial">
                        <img
                            class="testimonial-img"
                            alt="Photo of customer"
                            src="img/pics/customer2.jpg"
                        />
                        <blockquote class="testimonial-text">
                            The wipsy is crazy good, it chooses the right for
                            me every time. It's amazing not to worry about style anymore!
                        </blockquote>
                        <p class="testimonial-name">&mdash; Jenifer Hadley</p>
                    </figure>

                    <figure class="testimonial">
                        <img
                            class="testimonial-img"
                            alt="Kundin bewertungen gut und gunstig mina lashes & beauty "
                            src="img/pics/Wimpernverlangerung-Kundin-neuset-Klassic-bei-Minalashes-beauty.jpg"
                        />
                        <blockquote class="testimonial-text">
                            Ich gehe schon seit Jahren zu Mina, noch bevor sie diesen Salon eröffnet hat, weil sie die absolut besten Wimpernmacherinnen sind. Es gibt niemanden, dem ich meine Wimpern anvertrauen würde!
                            <p class="testimonial-name">&mdash; Claura Miller</p>
                        </blockquote>
                    </figure>

                    <figure class="testimonial">
                        <img
                            class="testimonial-img"
                            alt="Kundin glucklich mit gunstig wimpernverlangerung bei Minalashes & Beauty"
                            src="img/pics/Kunding-glucklich-gunstig-asia-wimpern.jpg"
                        />
                        <blockquote class="testimonial-text">
                            They are the kindest, sweetest and most talented beauticians in Switzerland hands down. I would give them more than five stars if I could. Perfect service everytime.
                        </blockquote>
                        <p class="testimonial-name">&mdash; Hannah Smith</p>
                    </figure>
                </div>
            </div>

            <div class="gallery">
                <figure class="gallery-item">
                    <img
                        src="img/pics/Mina_lashes_zurich_customer.png"
                        alt="Photo of beautifully customer"
                    />
                    <!-- <figcaption>Caption</figcaption> -->
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/Wimpernverlangerung-wispyset-client-minalashes.jpg"
                        alt="photo of wispy neuset wimpernverlangerung bei Mina lashes & beauty in zurich"
                    />
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/Mina_lashes_zurich_customer_3.png"
                        alt="Photo of beautifully customer"
                    />
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/wispy-wimperverlangerung-gunstig-in-zurich.jpg"
                        alt="wispy wimperverlangerung gunstig in zurich"
                    />
                </figure>

                <figure class="gallery-item">
                    <img
                        src="img/pics/logo Lashes-01.jpg"
                        alt="Photo of beautifully customer"
                    />
                </figure>

                <figure class="gallery-item">
                    <img
                        src="img/pics/mina_lashes_kundin_galaries_work.jpg"
                        alt="Minalashes sehr schon und gunstig volume neuset in zurich"
                    />
                </figure>


                <figure class="gallery-item">
                    <img
                        src="img/pics/Schone-kundin-neuset-volume-wimperverlangerung-bei-Minalashes.png"
                        alt="Wispy style wimpernverlangerung in zurich bei Mina lashes and beauty"
                    />
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/Minalashes-kundin-volume-neuset-gunstig-in-zurich.jpg"
                        alt="mina lashes und beauty volume neuset,  die beste wimpern studio in zurich"
                    />
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/Schone-kundin-neuset-volume-wimperverlangerung-bei-Minalashes.jpg"
                        alt="Volume style wimpernverlangerum gunstig bei Mina lashes and beauty"
                    />
                </figure>


                <figure class="gallery-item">
                    <img
                        src="img/pics/Wimpernverlangerung-volume-set-kundin-bei-Minalashes-beauty.jpg"
                        alt="Volume look kundin bei Minalashes and beauty"
                    />
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/logo Lashes-01.jpg"
                        alt="Photo of beautifully customer"
                    />
                </figure>
                <figure class="gallery-item">
                    <img
                        src="img/pics/wimpernverlangerung-volume-client-minalashes.jpg"
                        alt="photo of volume neuset wimpernverlangerung bei Mina lashes & beauty in zurich"
                    />
                </figure>

            </div>
        </section>

        <section class="section-pricing" id="pricing">
            <div class="container">
                <span class="subheading">Preis</span>
                <h2 class="heading-secondary">
                    Gute Wimpern, ohne das Budget zu sprengen
                </h2>
            </div>

            <div class="container grid grid--2-cols margin-bottom-md">
                <div class="pricing-plan pricing-plan--starter">
                    <header class="plan-header">
                        <p class="plan-name">Wimpernverlängerung</p>
                        <p class="plan-price"><span>CHF</span>80</p>
                        <p class="plan-text">zum aufüllen. Das ist 120CHF für Newset!</p>
                    </header>
                    <ul class="list">
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Bitte klicken Sie auf Termin buchen für weitere Details</span>
                        </li>

                    </ul>
                    <div class="plan-sing-up">
                        <!-- <a href="#" class="btn btn--full">Book a termin</a> -->
                        <a class="main-nav-link nav-cta" href='https://www.treatwell.ch/' id="wahanda-online-booking-widget"
                           onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/423065/menue/"); return false;' target="_blank">Einen Termin buchen</a>
                    </div>
                </div>

                <div class="pricing-plan pricing-plan--complete">
                    <header class="plan-header">
                        <p class="plan-name">Heisse Waxing</p>
                        <p class="plan-price"><span>CHF</span>30</p>
                        <p class="plan-text">fur Achsel. Ganzkörperoptionen sind verfügbar</p>
                    </header>
                    <ul class="list">
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Bitte klicken Sie auf Termin buchen für weitere Details</span>
                        </li>

                    </ul>
                    <div class="plan-sing-up">
                        <a class="main-nav-link nav-cta" href='https://www.treatwell.ch/' id="wahanda-online-booking-widget"
                           onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/423065/menue/"); return false;' target="_blank">Einen Termin buchen</a>
                    </div>
                </div>
            </div>

            <div class="container grid">
                <aside class="plan-details">
                    Die Preise enthalten alle anfallenden Steuern. Sie können jederzeit kündigen.
                </aside>
            </div>

            <div class="container grid grid--4-cols">
                <div class="feature">
                    <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                    <p class="feature-title">Fühlen Sie sich wie immer sicher</p>
                    <p class="feature-text">
                        Unser Geschäft ist 5 Tage pro Woche geöffnet, auch in den Sommer
                        Ferien.
                    </p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
                    <p class="feature-title">Lokal und biologisch</p>
                    <p class="feature-text">
                        Unsere Materialien verwenden nur lokale, frische und biologische Produkte, um
                        Ihre schön und gesund.
                    </p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
                    <p class="feature-title">Keine Wartezeit</p>
                    <p class="feature-text">
                        Nur Buchungen möglich, Vorbeikommen kann variieren..
                    </p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="pause-outline"></ion-icon>
                    <p class="feature-title">Jederzeit abbrechen</p>
                    <p class="feature-text">
                        Sie haben etwas Dringendes vor? Stornieren Sie einfach Ihre Buchung, und wir erstatten
                        100%.
                    </p>
                </div>
            </div>
        </section>

        <section class="section-cta" id="contact">
            <div class="container">
                <div class="cta">
                    <div class="cta-text-box">
                        <h2 class="heading-secondary">Sie wollen mit uns sprechen!</h2>
                        <p class="cta-text">
                            Euer Feedback ist sehr wertvoll und lasst uns wissen, wenn ihr irgendwelche Fragen habt.
                            Hani, der Studiogründer, hält es für selbstverständlich, dass alle Ideen willkommen sind!
                            Schreiben Sie uns hier oder rufen Sie uns an: 0775070699
                        </p>

                        <form class="cta-form" name="sign-up" netlify action="{{ route('send.mess') }}" method="POST">
                        @csrf
                            <div>
                                <label for="full-name">Name und Vorname:</label>
                                <input
                                    id="full-name"
                                    type="text"
                                    placeholder="Jessica Aniston"
                                    name="fullname"
                                    required
                                />
                            </div>

                            <div>
                                <label for="email">Email addresse:</label>
                                <input
                                    id="email"
                                    type="email"
                                    placeholder="me@example.com"
                                    name="email"
                                    required
                                />
                            </div>

                            <div>
                                <label for="select-where">Was ist Ihre Nachricht?</label>
                                <textarea width="400px" class="message" name="message" required>
                  </textarea>
                            </div>

                            <button type="submit" class="btn btn--form">Schicken</button>

                            <!-- <input type="checkbox" />
                            <input type="number" /> -->
                        </form>
                    </div>
                    <div><img
                            src="img/pics/mina_talkToUs.jpg"
                            alt="Let's talk to Mina"
                            class="talk">
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
