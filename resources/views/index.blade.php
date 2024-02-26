<x-layout>
    <div id="hero">
        <div class="hero-text-container">
            <h1 class="hero-header">DisCOVER THE</h1>
            <h1 class="hero-header">(UN)REAL</h1>

        </div>

        <canvas id="canvas"> </canvas>
    </div>

    <div class="h-[calc(100vh-4rem)]"></div>

    <div class="container mx-auto flex justify-center items-center flex-col">
        <p class="special-text">This year's theme</p>
        <h1 class="h1-header">(Un)Real</h1>
        <p class="text-block">
            This year, Cover presents a symposium that is going to be (Un)Real! It is all happening on the
            24th of April 2024! Get ready to discover what's real, what's not, and how it all adds up to something
            even better in the field of AI and CS. Lorem ipsum dolor sit amet. The future of tomorrow starts with us today, presenting you
            with some possibilities that you never thought of! Dive with us into the world of innovation. A
            world that might get you thinking about how your creative idea can be developed, and what risks
            or ethical questions this might bring. This will be done through a variety of topics which might
            alter your perspective on your prospective professional life.
        </p>
        <p class="text-block">
            The topics and speakers can be discovered on the <a class="" href="speakers">speaker page</a>. All speakers will be revealed by the 17th of April.
        </p>
        <p class="text-block">
            Join us to discover all those innovations! See you at (Un)Real!
        </p>

        <h2 class="h1-header">Practical information</h2>

        <p class="text-block">
            This year the symposium is going to take place on the 24th of April, 2024 in the Flonk Hotel
            Groningen Zuid. A buffet lunch is included in the ticket, together with tea coffee and cookies
            throughout the entire symposium. The speakers can be found on the speaker (hyperlink to the
            speaker page) page.
        </p>

        <div class="separator"></div>

        <div class="flex flex-row gap-4">
            <div class="flex flex-col gap-1">
                <p class="info-text-left">🥪Lunch?🥪</p>
                <p class="info-text-left">🕓When?🕓</p>
                <p class="info-text-left">📍Where?📍</p>
            </div>
            <div class="flex flex-col gap-1">
                <p class="info-text-right">Included</p>
                <p class="info-text-right">10:00 - 18:00 </p>
                <p class="info-text-right">Laan Corpus Den Hoorn 300, 9728 JT Groningen </p>
            </div>
        </div>

        <div class="separator"></div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6136.868683901094!2d6.558100402262958!3d53.186246573984036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c832a352659957%3A0x5c5d8507fd9ef917!2sLaan%20Corpus%20Den%20Hoorn%20300%2C%209728%20JT%20Groningen!5e0!3m2!1sro!2snl!4v1708607836483!5m2!1sro!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <h2 class="h1-header">Timetable</h2>

        <div class="separator"></div>
        @php
            $event = (object) [
                'start_time' => '9:00',
                'end_time' => '9:30',
                'name' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit',
                'speaker' => 'Cover board',
                'link' => 'https://www.google.com',
            ];
        @endphp

        <x-timetable-entry :event="$event"></x-timetable-entry>
        <x-timetable-entry :event="$event"></x-timetable-entry>
        <x-timetable-entry :event="$event"></x-timetable-entry>
    </div>

</x-layout>
