@extends('html')

@section('content')

    <div class="section container">
        <div class="row">
            <div class="column">
                <div class="logo">
                    <img id="img_ring" src="images/vanguard_ring.png"/>
                    <img id="img_text" src="images/vanguard_text.png"/>
                    <img id="img_van" src="images/vanguard_van.png"/>
                </div>
            </div>
        </div>
    </div>
    <div class="section container">
        <div class="row">
            <div class="column">
                <h1>SSC Vanguard</h1>
                <p><a class="button button-primary" href="https://twitter.com/SSCVanguard">Twitter</a></p>
            </div>
        </div>
    </div>
    <div class="darksection section container">
        <div class="row">
            <div class="ten columns offset-by-one">

                <h2>Background</h2>

                <p>After seeing an online talk about the LHS Bikeshed project, we decided something similar would be a
                    fun project to do from scratch ourselves. The general idea is that of a team-based flight simulator
                    inside a caravan, with a number of interactive controls to "fly" the ship.</p>

                <p>Such a project presents a lot of challenges and problems, from fitting it all the controls into a
                    small space, integrating a number of physical controls into a game, having these controls
                    distributed across multiple clients, and making the game playable!</p>

                <h2>Planning</h2>

                <p>The first plans were drawn up on scraps of paper, and shortly after transcribed into Google Docs. A
                    crude sketchup diagram was formed, and this was altered as plans progressed. A lot of ideas about
                    how the gameplay would work were thrown about (and many discarded shortly after).</p>

                <p> The sketchup
                    diagram quickly became the record of the physical control layout, and also gave a good idea of the
                    parts required. A lot of the gameplay mechanics evolved along with alterations to the physical
                    layout, as it became more evident what the exact roles of each player were going to be.</p>

                <h2>Game Engine</h2>

                <p>Around the time we were planning this project, the AWS Lumberyard product was released, which seemed
                    like an interesting and easy to use product. It very quickly became evident that the platform was
                    heavily tailored to FPS games, and certainly not a space flight-simulator, for example, in the
                    amount of work it took to "turn off" gravity.</p>

                <p>The sensible choice therefore seemed to be Unity, as this is a very flexible game engine that is
                    cross platform and easy to develop in. Within a few hours, we had a simple level in which you could
                    fly a ship round a (small) planet</p>

            </div>
        </div>
    </div>



    </body>
    </html>

@endsection