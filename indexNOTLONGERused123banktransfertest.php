<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>All In One Bot</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/video-js.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="shortcut icon" href="/allinonebot/images/favicon.ico" />
    <!-- Add modal CSS styles -->
    <style>
      /* Modal container */
      .modal-overlay {
      	position: fixed;
      	top: 0;
      	left: 0;
      	width: 100%;
      	height: 100%;
      	background: rgba(0, 0, 0, 0.6);
      	display: none;
      	justify-content: center;
      	align-items: center;
      	z-index: 9999;
        overflow-y: auto;
      }
      .modal-content {
        background: #1c1c1c;
        color: #fff;
        width: 95%;
        max-width: 600px;
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.5);
        position: relative;
        text-align: center;
        margin: 30px auto;
        max-height: 90vh;
        overflow-y: auto;
         padding-top: 60px;
      }
      .modal-content::-webkit-scrollbar {
        width: 0;
        background: transparent;
      }
      .modal-content h2 {
        color: #FFC107;
        margin: 0 0 25px;
        font-size: 2.2em;
        font-weight: 700;
        line-height: 1.2;
      }
      .modal-content p {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 25px;
      }
      .modal-close {
        position: absolute;
        top: 15px;

        right: 15px;
        width: 35px;
        height: 35px;
        font-size: 1.5em;
        color: #FFC107;
        cursor: pointer;
        background: rgba(255,255,255,0.1);
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
      }
      .modal-close:hover {
        background: #FFC107;
        color: #1c1c1c;
      }
      .modal-content form {
        margin-top: 30px;
      }
      .modal-content input[type="text"],
      .modal-content input[type="email"] {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: 10px auto;
        border: 2px solid rgba(255,255,255,0.1);
        border-radius: 8px;
        background: rgba(255,255,255,0.05);
        color: #fff;
        font-size: 1.1em;
        transition: all 0.3s ease;
      }
      .modal-content input:focus {
        border-color: #FFC107;
        outline: none;
        background: rgba(255,255,255,0.1);
      }
      .modal-content button[type="submit"] {
        background: #FFC107;
        color: #1c1c1c;
        border: none;
        padding: 15px 40px;
        border-radius: 8px;
        font-size: 1.2em;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
        transition: all 0.3s ease;
        text-transform: uppercase;
      }
      .modal-content button[type="submit"]:hover {
        background: #ffcd38;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255,193,7,0.3);
      }
      #confirmationMessage {
        background: rgba(255,193,7,0.1);
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #FFC107;
        margin-top: 25px;
      }
      @media (max-width: 600px) {
        .modal-content h2 {
          font-size: 1.5em;
        }
        .modal-content p {
          font-size: 0.9em;
          line-height: 1.4;
        }
        .modal-content button[type="submit"] {
          font-size: 1em;
          padding: 12px 25px;
        }
        #confirmationMessage p {
          font-size: 0.9em;
        }
      }
      body.modal-open {
        overflow: hidden;
      }
    </style>
  </head>

  <body>
    <!-- HERO SECTION -->
    <section class="hero text-center">
      <div class="wrapper">
        <h1 class="fs-22-18 text-uppercase spacer-5 poppins-medium">
          The Future Of Betting Is Here:
        </h1>

        <h2 class="h1 fs-60-40 text-uppercase spacer-5 poppins-extrabold">
          <span class="c-yellow">3 Automated Systems</span> That Place
          <span class="c-yellow">Value Bets 24/7</span>... Even While You're
          Sleeping
        </h2>

        <div class="mw-850px mx-auto">
          <h3 class="fs-25-21 font-weight-semi-bold line-height-173 spacer-20">
            They Work As Your Personal Betting Team... All Running At The Same
            Time … Finding And Placing Value Bets On Autopilot
          </h3>

          <h4 class="fs-25-21 font-weight-semi-bold line-height-173">
            Powered By A Brand New Breakthrough Value Betting Algorithm That
            Uncovers Profitable Bets Before The Masses Catch On
          </h4>
        </div>
      </div>
    </section>
    <!--ENDS HERO SECTION -->

    <!-- Insert Go Live link
    <section class="go-live">
      <div class="wrapper text-center">
        <a href="golive.html" class="cta fs-60-40">Go Live</a>
      </div>
    </section> -->

    <section>
      <div class="wrapper p-y-30">
        <p class="p-text">Let's cut to the chase...</p>

        <p class="p-text">
          AI is taking over the world. And smart betting isn't far behind.
        </p>

        <p class="p-text">But here's the thing nobody's talking about.</p>

        <p class="p-text">
          While most punters are still placing bets the old way... a small group
          of smart bettors are letting bots do all the work.
        </p>

        <p class="p-text spacer-15">Think about it...</p>

        <p class="p-text spacer-15">
          Right now, you're probably glued to your screen... manually looking at
          online software … checking the odds haven’t changed... placing bets...
          doing all the leg work yourself.
        </p>

        <p class="p-text spacer-20">
          It's exhausting. And it's absolutely pointless.
        </p>

        <p class="p-text spacer-15">Because here's what's possible today:</p>

        <p class="p-text">
          Imagine hitting one button... then watching as three smart betting
          bots hunt down value bets and lock in tax free profits...
        </p>

        <p class="p-text">24 hours a day.</p>

        <p class="p-text">Picture your typical betting weekend...</p>

        <p class="p-text spacer-20">
          Your Saturday plans? Cancelled. Your family time? On hold. That
          football match you wanted to watch? You're too busy checking odds.
        </p>

        <p class="p-text spacer-20">
          While everyone else is enjoying life, you're:
        </p>

        <!-- YELLOW BLACK POINTER LIST -->
        <ul class="yellow-pointer-list spacer-30">
          <li class="p-text">
            Trawling through online communities hoping somebody might share
            their winning system
          </li>
          <li class="p-text">
            Hunched over your laptop desperately refreshing odds software
          </li>
          <li class="p-text">
            Finally spotting a perfect bet... only to see the odds crash seconds
            before you click
          </li>
        </ul>
        <!--ENDS YELLOW BLACK POINTER LIST -->

        <p class="p-text">Sound familiar?</p>

        <p class="p-text">The worst part?</p>

        <p class="p-text">
          After all that time... all that effort... all those missed moments...
        </p>

        <p class="p-text">
          You're probably still missing 90% of the real value bets out there.
        </p>

        <p class="p-text">It's not your fault.</p>

        <p class="p-text">
          You're fighting a losing battle. Nobody can watch odds 24/7. Nobody
          can check every market. And nobody can react fast enough when real
          value appears.
        </p>

        <p class="p-text mb-0">Nobody... except a bot.</p>
      </div>
    </section>

    <section class="section-automation-unleashes">
      <div class="wrapper">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-30 l-h-11">
          Sports Betting <span class="c-yellow">Automation Unleashes</span>
          <br />
          An Avalanche Of Easy Money
        </h1>

        <p class="p-text">
          That's not science fiction. That's happening right now.
        </p>

        <p class="p-text">Imagine this...</p>
        <p class="p-text">
          While you're sleeping... watching the match... or down the pub with
          your mates... your clever betting bots are working their socks off.
        </p>
        <p class="p-text">They're finding value bets other punters miss.</p>

        <p class="p-text">They're placing those bets automatically.</p>

        <p class="p-text">
          And they're stuffing your pockets with pure tax free profit.
        </p>

        <p class="p-text">The best part? You don't lift a finger.</p>

        <p class="p-text mb-0">
          This is what the future of betting looks like. And it's already here.
        </p>
      </div>
    </section>

    <section>
      <div class="wrapper p-y-30">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-30 l-h-11">
          The Unfair <span class="c-yellow">Advantage</span> Is Real!
        </h1>

        <p class="p-text">Look, I'll be straight with you...</p>

        <p class="p-text spacer-30">
          If you're still doing this betting malarkey by hand, you're living in
          the stone age.
        </p>

        <!-- YELLOW BLACK POINTER LIST -->
        <ul class="yellow-pointer-list spacer-30">
          <li class="p-text">Wasting precious hours glued to your screen...</li>
          <li class="p-text">
            Running numbers through calculators like a mad scientist...
          </li>
          <li class="p-text">Racing against time before the odds change...</li>
        </ul>
        <!--ENDS YELLOW BLACK POINTER LIST -->

        <p class="p-text">It's madness. And it needs to stop.</p>

        <p class="p-text">Here's why.</p>

        <p class="p-text">
          These smart betting bots can spot and snatch up value bets faster than
          you can blink.
        </p>

        <p class="p-text">
          While most mugs are still rubbing sleep from their eyes...
        </p>

        <p class="p-text">
          These bots have already found and placed dozens of profitable bets.
        </p>

        <p class="p-text">What used to take you a whole week of grinding?</p>

        <p class="p-text">These clever little blighters do it before lunch.</p>

        <p class="p-text">And the best bit?</p>

        <p class="p-text spacer-45">
          They never sleep. Never get tired. And never miss an opportunity.
        </p>

        <h2 class="fs-55-35 poppins-extrabold text-center spacer-40 l-h-11">
          Breakthrough Algorithm: <br />
          Finding <span class="c-yellow">Value Bets</span> Before Anyone Else
        </h2>

        <p class="p-text">
          Finding value bets by comparing bookmaker odds against the Exchange
          odds works. There’s no doubt about it.
        </p>
        <p class="p-text">
          Check the bookmaker odds. Compare against the Exchange lay odds. If
          the bookmaker odds are higher - boom, it’s a "value bet". This is how
          most Value Betting software programs work.
        </p>
        <p class="p-text">
          Thousands of smart punters profit this way every single day.
        </p>
        <p class="p-text">But here's the thing...</p>
        <p class="p-text">You're leaving stacks of cash on the table.</p>
        <p class="p-text">
          Bookies watch the Exchange odds like hawks. The SECOND they detect any
          movement they slash their odds.
        </p>
        <p class="p-text">
          Any "value" vanishes faster than a pint on a hot day.
        </p>
        <p class="p-text">
          And with hundreds of punters all hunting the same bets...
        </p>
        <p class="p-text">
          You're in a race against time. Every. Single. Time.
        </p>
        <p class="p-text">
          What if you could spot value BEFORE the Exchange odds give it away?
        </p>
        <p class="p-text">
          What if you could find profitable bets that other punters don't even
          know exist?
        </p>
        <p class="p-text">
          A method so clever... so under the radar... that bookies won't know
          what hit them?
        </p>
        <p class="p-text mb-0">
          Because that's exactly what I've discovered...
        </p>
      </div>
    </section>

    <section class="section-hidden-value">
      <div class="wrapper">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-30 l-h-11">
          Discovering <span class="c-yellow">Hidden Value</span> <br />
          Bets The Rest Of The Market Misses
        </h1>

        <p class="p-text">
          Other value betting software can only spot value by comparing
          bookmaker odds against the Exchange lay odds.
        </p>
        <p class="p-text">We're doing something REVOLUTIONARY.</p>
        <p class="p-text">
          We've created a data beast that calculates the fair value odds of each
          selection in markets that haven’t yet formed properly.
        </p>
        <p class="p-text">
          When markets first open the Exchange odds are a wild mess. Massive
          gaps. No liquidity. It’s total chaos.
        </p>

        <p class="p-text spacer-20">Here’s an example: -</p>

        <img src="images/img-1.png" alt="" class="spacer-20" />

        <p class="p-text">
          Stoneacres : with back odds of 4.7 and lay odds of 10.5. Look at that
          gap. It's massive.
        </p>
        <p class="p-text">
          When you see odds this far apart, it means one thing: The Exchange
          market hasn't formed properly yet.
        </p>

        <p class="p-text">
          It's like a jigsaw puzzle with missing pieces. The fair odds of
          Stoneacres winning the race must sit somewhere between these two
          prices.
        </p>

        <p class="p-text">That’s precisely what our algorithm calculates.</p>
        <p class="p-text">
          Fair Exchange odds in illiquid markets that haven’t yet formed
          properly.
        </p>

        <p class="p-text">
          It analyses book percentages… market movements... betting patterns...
          historical odds in similar markets... everything that matters.
        </p>

        <p class="p-text">
          It spits out one golden number: The fair odds of a selection winning.
        </p>

        <p class="p-text">
          While other punters are scratching their heads waiting for the
          Exchange markets to form properly... And waiting for some liquidity to
          appear.
        </p>
        <p class="p-text">The algorithm is already three steps ahead.</p>
        <p class="p-text">
          It cuts through the chaos to find the truth. The exact probability of
          a winner.
        </p>
        <p class="p-text">Then it goes hunting...</p>
        <p class="p-text">
          Comparing these razorsharp calculations against every bookmaker price.
        </p>
        <p class="p-text">When it spots bookie odds that are too high?</p>
        <p class="p-text">
          BOOM. You've got yourself a value bet nobody else can see.
        </p>
        <p class="p-text">Pure profit hiding in plain sight.</p>
        <p class="p-text">
          It's a data crunching machine that works without the need for checking
          the Exchange lay odds.
        </p>
        <p class="p-text">
          While other software sees the surface, we see the hidden currents of
          betting markets.
        </p>
        <p class="p-text">
          The result? Laser precise fair odds that expose value bets with
          bookmakers that NOBODY else can see.
        </p>
        <p class="p-text">
          Here's what makes this so powerful: We're not just finding bets. We're
          uncovering SECRET opportunities across EVERY bookmaker.
        </p>
        <p class="p-text">
          And the best part? This algorithm is IMPOSSIBLE to copy.
        </p>
        <p class="p-text">
          Other value betting software are stuck using the same old Exchange lay
          odds trick.
        </p>
        <p class="p-text mb-0">
          We're operating in a completely different league.
        </p>
      </div>
    </section>

    <section>
      <div class="wrapper p-y-30">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-30 l-h-11">
          The proof? <span class="c-yellow">Cold</span>.
          <span class="c-yellow">Hard</span>.
          <span class="c-yellow">CASH</span>.
        </h1>

        <p class="p-text">
          In a rigorous tests of 5000 bets, the bots averaged a MIND BLOWING
          19.3% ROI. Let that sink in.
        </p>

        <p class="p-text">
          Most punters are jumping for joy at 10%. We're almost DOUBLING that.
          (I’ll be giving you more information about the results later on in
          this letter).
        </p>

        <p class="p-text">
          This isn't just software. This is your personal money printing
          machine.
        </p>

        <p class="p-text">
          Hundreds of extra bets every single week. Untapped potential. And
          profit opportunities others can't even see.
        </p>

        <p class="p-text spacer-50">
          We're not just changing the game. We're OWNING it.
        </p>

        <h2
          class="fs-55-35 poppins-extrabold text-center spacer-40 mx--20 l-h-11"
        >
          Unleash The Ultimate Value Finding <br />
          Machine:
          <span class="c-yellow">Two Powerful Strategies</span> Combined
        </h2>

        <p class="p-text">Let's talk about doubling your firepower...</p>

        <p class="p-text">
          The traditional way of finding value bets works. Comparing bookmaker
          odds against Exchange odds has made smart punters serious money for
          years.
        </p>

        <p class="p-text">
          But now you've got something even more powerful in your arsenal. An
          algorithm that spots value BEFORE Exchange markets even form.
        </p>

        <p class="p-text">Here's where it gets really interesting...</p>

        <p class="p-text">
          Your bots don't just use one approach. They use BOTH.
        </p>

        <p class="p-text spacer-20">
          While other punters are stuck using just Exchange comparisons...
        </p>

        <p class="p-text font-weight-medium spacer-15 fs-22-18">
          Your profit machine is working on two levels:
        </p>

        <!-- YELLOW BLACK POINTER LIST -->
        <ul class="yellow-pointer-list spacer-25">
          <li class="p-text font-weight-semi-bold">
            Hunting down traditional value bets using tried and tested Exchange
            comparisons
          </li>
          <li class="p-text font-weight-semi-bold">
            Simultaneously finding hidden gems using the breakthrough algorithm
          </li>
        </ul>
        <!--ENDS YELLOW BLACK POINTER LIST -->

        <p class="p-text">Think about what this means...</p>

        <p class="p-text">
          When Exchange markets are fully formed? You're grabbing those proven
          profitable bets.
        </p>

        <p class="p-text">
          When markets are still developing? Your algorithm is already spotting
          value others can't see.
        </p>

        <p class="p-text">
          You're not just working one angle. You're attacking from every
          direction.
        </p>

        <p class="p-text">
          This isn't about choosing between strategies. This is about unleashing
          them BOTH at the same time.
        </p>

        <p class="p-text font-weight-semi-bold">The result?</p>

        <p class="p-text">
          Double the opportunities. Double the profit potential. And double the
          edge over other punters.
        </p>

        <p class="p-text">
          While they're limited to one way of finding value, you're combining
          the best of both worlds into one unstoppable profit machine.
        </p>

        <p class="p-text mb-0">
          This is value betting evolved to its final form.
        </p>
      </div>
    </section>

    <section class="b-black p-y-30">
      <div class="wrapper">
        <h1
          class="fs-55-35 poppins-extrabold text-center spacer-40 mx--20 l-h-11"
        >
          Introducing The All In One <br />
          Bot <span class="c-yellow">Automated Betting Software</span>
        </h1>

        <p class="p-text">
          By now, you'd be CRAZY not to want these automated systems.
        </p>

        <p class="p-text">
          There is NO better way to print money from betting than using a proven
          autopilot system.
        </p>

        <p class="p-text">This bundle has 3 of them!</p>

        <p class="p-text">This isn't an opinion. This is a FACT.</p>

        <p class="p-text">
          Years of grinding. Countless sleepless nights. And thousands of failed
          attempts.
        </p>
        <p class="p-text">
          All to create THE most advanced betting algorithm on planet Earth.
        </p>

        <p class="p-text">
          What I'm offering isn't just software. This is a MONEY MAKING MACHINE.
        </p>

        <p class="p-text">
          It’s three separate bots. All housed in ONE powerful piece of
          software.
        </p>

        <p class="p-text">
          When you hit start button. Watch all three spring into action. All
          running at the exact same time.
        </p>

        <p class="p-text">
          Hunting down value bets that other punters can't even see using a
          breakthrough algorithm.
        </p>

        <p class="p-text">
          Each bot is like a special forces operative. Searching. Scanning.
          Identifying the most profitable opportunities.
        </p>

        <p class="p-text">
          But here's the killer feature: The software automatically selects the
          HIGHEST VALUE bets across ALL THREE systems.
        </p>

        <p class="p-text">
          Translation? You're ALWAYS placing the most profitable bet possible.
        </p>
        <p class="p-text">No matter which bot finds it.</p>

        <p class="p-text">
          Three profit machines. Running non stop. All working together at the
          same time.
        </p>
        <p class="p-text mb-0">Making you money around the clock.</p>
      </div>
    </section>

    <section class="p-y-30">
      <div class="wrapper-outer">
        <!-- SYSTEM 1 BLOCK -->
        <section class="system-block system-block-1 spacer-40">
          <div class="relative text-center">
            <h1
              class="headline text-center text-uppercase mx-auto spacer-20 fs-25-21"
            >
              <span>System 1</span>
            </h1>
            <img src="images/headline-line.png" alt="" class="headline-line" />
          </div>

          <h2 class="fs-85-50 poppins-extrabold text-center spacer-15 l-h-11">
            Each Way Sniper
          </h2>

          <p class="fs-30-26 text-center font-weight-semi-bold spacer-35">
            Each Way Sniper Automated Betting Software
          </p>

          <div class="wrapper">
            <div class="container-video">
              <video
                class="video-js vjs-fluid vjs-matrix"
                controls
                preload="auto"
                data-setup="{}"
              >
                <source src="videos/ewsbotalesvid.mp4" type="video/mp4" />
                <!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider
                  upgrading to a web browser that
                  <a
                    href="https://videojs.com/html5-video-support/"
                    target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>
            </div>
            <img src="images/video-bg.png" alt="" class="mx-auto video-bg" />

            <p class="p-text">
              The software exploits a massive loophole in each way bets. The
              bookies pay MORE for the place than they should based on the win
              odds. That's pure value sitting there waiting to be grabbed.
            </p>
            <p class="p-text">
              Here's how it works: Most punters miss the E/W pricing
              discrepancies that can turn into serious profit. Our software does
              the heavy lifting, scanning hundreds of races and identifying
              those golden opportunities where the place odds are more generous
              than the win odds suggest. It checks every Bookmaker price against
              the Exchange to pinpoint the exact value of each bet.
            </p>
            <p class="p-text">
              You don't need to be sat at the computer. You don't need betting
              expertise. The software does ALL the work, discovering those sweet
              spots where the bookies have accidentally left money on the table.
            </p>
            <p class="p-text spacer-40">
              Full access. Full automation. Maximum profit.
            </p>

            <h3
              class="poppins-extrabold fs-30-26 headline-half-triangle spacer-20"
            >
              Each Way Sniper Brand New Algorithm
            </h3>

            <p class="p-text">
              We've engineered something that changes everything about value
              betting.
            </p>

            <p class="p-text">
              Two breakthrough algorithms working together. One for standard
              each way bets. One for extra places.
            </p>
            <p class="p-text">
              Both doing something nobody else has cracked...
            </p>
            <p class="p-text">
              They calculate the TRUE fair odds BEFORE Exchange markets form
              properly.
            </p>
            <p class="p-text">
              Here's the golden secret: While bookmakers obsessively watch
              Exchange odds, your algorithms are three steps ahead. Creating
              precise fair odds benchmarks that spot value others can't see.
            </p>
            <p class="p-text">
              This isn't just an upgrade. This is betting from the future.
            </p>
            <p class="p-text spacer-40">
              While standard Each Way Sniper software waits for Exchange markets
              to settle, your enhanced system is already banking profits.
            </p>

            <div class="row spacer-15">
              <div class="col-lg-6 spacer-30">
                <div class="card">
                  <h4 class="fs-25-21 font-weight-bold spacer-35">
                    Each Way Sniper Algorithm Results
                  </h4>

                  <ul class="yellow-pointer-list">
                    <li class="p-text">
                      500 ADDITIONAL bets per month Discovered OUTSIDE standard
                      EWS software
                    </li>
                    <li class="p-text">
                      5-month trial period tested 12000 total bets
                    </li>
                    <li class="p-text mb-0">
                      19.3% Return on Investment based on the recommended
                      settings
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-6 spacer-30">
                <div class="card">
                  <h4 class="fs-25-21 font-weight-bold spacer-35">
                    Extra Place Algorithm Results
                  </h4>

                  <ul class="yellow-pointer-list">
                    <li class="p-text">
                      200 ADDITIONAL extra places bets per month Discovered
                      OUTSIDE standard EWS software
                    </li>
                    <li class="p-text">
                      5-month trial period tested 2000 total bets
                    </li>
                    <li class="p-text mb-0">12.8 % Return on Investment</li>
                  </ul>
                </div>
              </div>
            </div>

            <p class="p-text">
              You're not just finding standard value bets anymore...
            </p>
            <p class="p-text">
              You're unleashing a mathematical monster that prints money from
              opportunities other punters can't even see.
            </p>
            <p class="p-text">
              This isn't just clever software. This is your personal betting
              time machine.
            </p>
            <p class="p-text spacer-40">
              While others wait for markets to form, you're already counting
              your profits.
            </p>

            <h3
              class="poppins-extrabold fs-30-26 headline-half-triangle spacer-20"
            >
              Future Updates
            </h3>

            <p class="p-text">
              The algorithm isn't just a tool. It's a living profit engine.
            </p>
            <p class="p-text">
              Every bet makes it smarter. More data means more precision. The
              Mathematical models constantly refine. Hunting down more high
              value betting opportunities.
            </p>
            <p class="p-text">
              Imagine a high performance racing engine. The more you test & the
              more you tune. The power increases & efficiency grows.
            </p>
            <p class="p-text">
              Regular updates mean one thing. Your ROI keeps climbing. You'll
              always stay ahead of the market.
            </p>
            <p class="p-text">
              The mission is crystal clear. Never stop improving. Never stop
              finding value.
            </p>

            <p class="p-text spacer-40">
              Continuous improvement. Continuous profit.
            </p>

            <h3
              class="poppins-extrabold fs-30-26 headline-half-triangle spacer-20"
            >
              Ready To Profit Settings Already Loaded
            </h3>

            <p class="p-text">
              Since 2019, I've been fine tuning these bots to perfection.
            </p>

            <p class="p-text">
              Thousands of bets. Countless tests. Years of optimisation.
            </p>

            <p class="p-text">
              And I'm handing you the EXACT settings that print money day after
              day. With no guesswork, trial and error or complicated setup
              needed.
            </p>

            <p class="p-text">Just pure plugin and play profit.</p>

            <p class="p-text">
              Download the software. Hit start. And watch the money roll in.
            </p>

            <p class="p-text">
              I've done all the hard work for you. Every setting, every
              parameter & every tiny detail.
            </p>

            <p class="p-text mb-0">
              This isn't just automated betting. This is automated betting
              perfected to a science. Your profit machine comes pre loaded and
              ready to fire from day one.
            </p>
          </div>
        </section>

        <!-- SYSTEM 2 BLOCK -->
        <section class="system-block system-block-2">
          <div class="relative text-center">
            <h1
              class="headline text-center text-uppercase mx-auto spacer-20 fs-25-21"
            >
              <span>System 2</span>
            </h1>
            <img src="images/headline-line.png" alt="" class="headline-line" />
          </div>

          <h2 class="fs-85-50 poppins-extrabold text-center spacer-15 l-h-11">
            2 Up Bot
          </h2>

          <p class="fs-30-26 text-center font-weight-semi-bold spacer-35">
            Automated 2 Up software
          </p>

          <div class="wrapper">
            <div class="container-video">
              <video
                class="video-js vjs-fluid vjs-matrix"
                controls
                preload="auto"
                data-setup="{}"
              >
                <source src="videos/2upbotsalesvid.mp4" type="video/mp4" />
                <!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider
                  upgrading to a web browser that
                  <a
                    href="https://videojs.com/html5-video-support/"
                    target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>
            </div>
            <img src="images/video-bg.png" alt="" class="mx-auto video-bg" />

            <p class="p-text">
              First, let me explain why 2 Up betting is pure gold...
            </p>
            <p class="p-text">
              When your team goes 2 goals up, certain bookmakers pay out your
              bet as a winner immediately. Even if the other team comes back to
              draw or win.
            </p>
            <p class="p-text">
              Find a team with good value odds? You're looking at one of the
              most valuable bets in sports betting.
            </p>
            <p class="p-text">But here's the challenge...</p>

            <p class="p-text">
              Finding these opportunities manually is like hunting for a needle
              in a haystack. You need perfect timing. The right odds. The right
              match. And lightning fast reactions when opportunities appear.
            </p>

            <p class="p-text spacer-45">
              That's where your automated bot comes in...
            </p>

            <ul class="yellow-pointer-list yellow-pointer-list-30 spacer-25">
              <li class="p-text font-weight-semi-bold fs-30-26 l-h-133">
                2 Up Bot: Your 24/7 Profit Hunter. The bot can work tirelessly
                around the clock to find and lockin the most lucrative 2 Up
                opportunities out there.
              </li>
            </ul>

            <p class="p-text spacer-40">
              This lightning fast software spots profitable bets in seconds and
              handles all the number crunching automatically. Stakes are
              calculated to perfection every time. It even places the bets for
              you so you don't have to lift a finger.
            </p>

            <hr />

            <ul class="yellow-pointer-list yellow-pointer-list-30 spacer-25">
              <li class="p-text font-weight-semi-bold fs-30-26 l-h-133">
                The algorithms detect odds changes faster than a cheetah on
                steroids. The 2 Up bot blows any other betting bot out of the
                water when it comes to live updating odds.
              </li>
            </ul>

            <p class="p-text spacer-40">
              That means no more missed chances and no more watching potential
              earnings disappear in an instant. Just the fastest odds updating
              in the business to help you lock in profits around the clock.
            </p>

            <hr />

            <ul class="yellow-pointer-list yellow-pointer-list-30 spacer-25">
              <li class="p-text font-weight-semi-bold fs-30-26 l-h-133">
                The custom designed algorithm detects the most lucrative, high
                value 2 Up opportunities. No more guessing. No more hoping. Just
                cold hard maths identifying which bets are the best value.
              </li>
            </ul>

            <p class="p-text spacer-40">
              For the first time ever, we're letting members peek behind the
              curtain to see exactly how this algorithm dominates the world of 2
              Up betting.
            </p>

            <hr />

            <ul class="yellow-pointer-list yellow-pointer-list-30 spacer-25">
              <li class="p-text font-weight-semi-bold fs-30-26 l-h-133">
                You don't have to do ANY of the leg work. When you get your
                hands on the 2 Up bot, I personally ensure it's already
                optimised to its full earth shattering profit potential.
              </li>
            </ul>

            <p class="p-text spacer-40">
              That's right. Before you even install it, I meticulously configure
              every single setting - risk levels, bet criteria, staking - to
              maximise the earning power of this software. No detail is
              overlooked.
            </p>

            <hr />

            <ul class="yellow-pointer-list yellow-pointer-list-30 spacer-50">
              <li class="p-text font-weight-semi-bold fs-30-26 l-h-133">
                The result? The most finely tuned 2 Up betting software that
                delivers jaw dropping profits on autopilot. Just plug and play
                for gains previously thought impossible.
              </li>
            </ul>
          </div>
        </section>

        <!-- SYSTEM 3 BLOCK -->
        <section class="system-block system-block-3">
          <div class="relative text-center">
            <h1
              class="headline text-center text-uppercase mx-auto spacer-20 fs-25-21"
            >
              <span>System 3</span>
            </h1>
            <img src="images/headline-line.png" alt="" class="headline-line" />
          </div>

          <h2 class="fs-85-50 poppins-extrabold text-center spacer-15 l-h-11">
            20 Minute System
          </h2>

          <p class="fs-30-26 text-center font-weight-semi-bold spacer-35">
            Automated Golf Betting
          </p>

          <div class="wrapper">
            <div class="container-video">
              <video
                class="video-js vjs-fluid vjs-matrix"
                controls
                preload="auto"
                data-setup="{}"
              >
                <source src="videos/golfprofits.mp4" type="video/mp4" />
                <!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider
                  upgrading to a web browser that
                  <a
                    href="https://videojs.com/html5-video-support/"
                    target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>
            </div>
            <img src="images/video-bg.png" alt="" class="mx-auto video-bg" />

            <p class="p-text">
              Most punters miss the goldmine sitting right in front of them.
              Bookies offering extra places on golf tournaments. While others
              overlook these opportunities this system hunts down pure value.
            </p>
            <p class="p-text">
              Bookmakers are giving away money. By playing an additional 3
              places beyond the standard place terms, they've created a profit
              opportunity too good to ignore.
            </p>
            <p class="p-text spacer-20">The numbers are insane.</p>

            <div class="card spacer-30 d-inline-block">
              <ul class="yellow-pointer-list">
                <li class="p-text">519 points generated in just 18 months.</li>
              </ul>
            </div>

            <p class="p-text">
              This isn't just another betting system. This is a mathematically
              engineered profit weapon. Now we've automated the entire process.
              No work required from you.
            </p>

            <p class="p-text">
              The system finds the highest value golf bets. It calculates the
              bet value using Exchange lay odds.
            </p>

            <p class="p-text">
              All your bets are placed automatically. It delivers profits
              directly to your account
            </p>

            <p class="p-text">
              No more hours scanning markets. No more missed opportunities.
            </p>

            <p class="p-text spacer-40">Pure strategy. Pure profit.</p>

            <h3
              class="poppins-extrabold fs-30-26 headline-half-triangle spacer-20"
            >
              20 Minute System Brand New Algorithm
            </h3>

            <p class="p-text">
              While the standard 20 Minute System spots value using Exchange
              odds, we've added something revolutionary...
            </p>
            <p class="p-text">
              A breakthrough algorithm that finds profitable Golf bets BEFORE
              markets form properly.
            </p>
            <p class="p-text spacer-20">
              Our recent 4 month test revealed something mind blowing...
            </p>

            <div class="card spacer-40 d-inline-block">
              <ul class="yellow-pointer-list">
                <li class="p-text">
                  320 EXTRA betting opportunities the standard software missed
                  completely
                </li>
                <li class="p-text">
                  Incredible 35.1% ROI on these additional bets alone
                </li>
                <li class="p-text">
                  Lower average odds for more consistent profits
                </li>
                <li class="p-text mb-0">
                  Less bankroll swings means steadier growth
                </li>
              </ul>
            </div>

            <p class="p-text">
              You're not just getting the proven 20 Minute System anymore.
              You're getting a supercharged profit machine that spots value
              other punters can't even see.
            </p>

            <p class="p-text">
              Think about it. While others wait for Exchange markets to mature,
              you're already banking profits from hidden opportunities.
            </p>

            <p class="p-text spacer-40">
              The edge is astronomical. The profits are automatic. And it all
              works while you sleep.
            </p>

            <h3
              class="poppins-extrabold fs-30-26 headline-half-triangle spacer-20"
            >
              Future Updates
            </h3>

            <p class="p-text">
              Let me tell you something EXCITING about the Golf value betting
              Algorithm...
            </p>

            <p class="p-text">
              This isn't just software. It's a profit machine that gets smarter
              every single day. With every bet placed it’s gathering more data.
              With every market analysed the Algorithm gets sharper.
            </p>
            <p class="p-text">
              Think of it like training an athlete. The more they practice, the
              better they perform.
            </p>

            <p class="p-text mb-0">
              The Algorithm is the same. It's constantly finding ways to squeeze
              out MORE PROFIT for you.
            </p>
          </div>
        </section>
      </div>
    </section>

    <section>
      <div class="wrapper">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-30 l-h-11">
          Your Betting Life Is <br />
          About To <span class="c-yellow">Change FOREVER</span>
        </h1>

        <p class="p-text">
          Sure, you COULD keep staring at your betting software screen.
          Frantically hitting refresh every 10 seconds hoping for a value bet to
          appear.
        </p>
        <p class="p-text">But let's get REAL.</p>
        <p class="p-text">
          Who has HOURS to waste staring at screens? Calculating odds? Racing
          against shifting markets?
        </p>
        <p class="p-text">Not you. And you shouldn't have to.</p>
        <p class="p-text">Imagine a world where:</p>
        <p class="p-text">
          Betting happens while you're sleeping. Profits roll in without you
          lifting a finger. And golden opportunities are NEVER missed.
        </p>
        <p class="p-text">This isn't a fantasy. This is your new reality.</p>
        <p class="p-text">
          We've built something that turns betting from a TIME CONSUMING job
          into a PROFIT GENERATING machine.
        </p>
        <p class="p-text">
          With an advanced algorithm that discovers value bets NOBODY else sees.
        </p>
        <p class="p-text">
          It uncovers HIDDEN GOLD mines other punters don't even know exist.
        </p>
        <p class="p-text">While they're all fighting over the same scraps...</p>
        <p class="p-text">
          You're feasting on untapped profits they can't even SEE.
        </p>
        <p class="p-text">
          Pure, hands free profit powered by the most cutting edge betting
          technology on the planet.
        </p>
        <p class="p-text spacer-40">There is nothing else like it on earth.</p>

        <h2 class="fs-55-35 poppins-extrabold text-center spacer-40 l-h-11">
          The Alternatives to the
          <span class="c-yellow">All In One Bot</span>...
        </h2>

        <p class="p-text">
          Picture this nightmare. You're glued to your screen all weekend.
          HOPING to find a profitable bet.
        </p>
        <p class="p-text">
          Browser tabs everywhere. Manually refreshing your betting software
          every 10 seconds hoping a new selection will pop up. Calculator
          burning hot.
        </p>
        <p class="p-text">
          Fifteen painful minutes pass... for ONE single bet.
        </p>
        <p class="p-text">IT’S MADNESS.</p>
        <p class="p-text">
          Sure, my systems make serious money. Thousands of smart punters prove
          that every single day.
        </p>
        <p class="p-text">But let's get REAL...</p>
        <p class="p-text">
          Who's got 15 minutes to waste on EVERY... SINGLE... BET?
        </p>
        <p class="p-text">Not you.</p>
        <p class="p-text">
          Your free time is PRECIOUS. You shouldn't be chained to an online
          software manually placing bets like some betting slave.
        </p>
        <p class="p-text">Look, this is a NO BRAINER.</p>
        <p class="p-text spacer-30">
          Why grind away manually when smart technology can hunt down EXCLUSIVE
          value bets for you?
        </p>
      </div>
    </section>

    <section class="b-black p-y-30">
      <div class="wrapper">
        <h1
          class="fs-55-35 poppins-extrabold text-center spacer-40 mx--20 l-h-11"
        >
          Decide RIGHT NOW if you want to start <br />
          making tax free money on <span class="c-yellow">autopilot</span>
        </h1>

        <p class="p-text">Look, I'll be straight with you...</p>

        <p class="p-text">
          Every day you wait is another day of missed profits. Another day of
          value bets slipping through your fingers. And another day of letting
          others grab the best opportunities.
        </p>

        <p class="p-text">
          You won't find software this powerful anywhere else. Nobody else has
          cracked the code of finding value BEFORE Exchange markets form.
        </p>

        <p class="p-text">
          Nobody else gives you THREE profit hunting bots working together
          around the clock.
        </p>

        <p class="p-text">
          And absolutely nobody else has an algorithm that spots betting gold
          other punters can't even see.
        </p>

        <p class="p-text">
          This is your chance to stop grinding away manually. To stop wasting
          hours staring at screens. And to start letting cutting edge technology
          stuff your pockets with pure profit.
        </p>

        <p class="p-text">The choice is simple.</p>

        <p class="p-text">
          Keep doing what you're doing. Fighting for the same bets as everyone
          else...
        </p>

        <p class="p-text">
          Or click the button below and transform your betting life forever.
        </p>

        <p class="p-text">
          Your automated profit machine is loaded and ready. The only question
          is.
        </p>

        <p class="p-text">Are you ready to claim it?</p>

        <p class="p-text">
          Here's the deal - this offer is EXCLUSIVELY for my inner circle of
          customers who've been personally invited. Don't miss your shot at
          these profit-pulling machines!
        </p>
        <p class="p-text">
          Simply enter your name and email below (takes 2 seconds) and I'll rush
          you the bank transfer details immediately. This application process
          ensures only my existing customers get access to this extraordinary
          deal. Fill in those details NOW before this disappears forever!
        </p>
        <p class="p-text mb-0">&nbsp;</p>
        <h1 class="text-center"><strong>£999</strong></h1>
        <p>
          <a href="#" class="cta fs-60-40 open-modal">Apply To Join </a>
          <img
            src="images/cta-shadow.png"
            alt=""
            class="d-block mx-auto"
          /><br />
          <br />
        </p>
      </div>
    </section>

    <section>
      <div class="wrapper p-y-30">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-40 l-h-11">
          Only 10 Spots Available - <br />
          Will <span class="c-yellow">You Claim Yours?</span>
        </h1>

        <p class="p-text text-center fs-25-21 font-weight-medium spacer-30">
          Let's stack up everything in your automated profit package:
        </p>

        <div class="card-light-blue spacer-50">
          <ul class="check-list">
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              THREE profit hunting bots working 24/7 for you
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              The breakthrough algorithm nobody else has access to
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              Ready to profit settings perfected since 2019
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              Instant access to the private winners community
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              Unlimited access for twelve months
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              All future bot updates and improvements
            </li>

            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              Complete training package and quick start guide
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              Direct support line to me personally
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              Works even with restricted betting accounts
            </li>
            <li class="p-text fs-25-21 font-weight-semi-bold font-italic">
              No complicated setup. Just hit start
            </li>
          </ul>
        </div>

        <p class="p-text spacer-15">Here's the thing though...</p>

        <p class="p-text">
          This software is too powerful to let everyone in. Too many users means
          less profit for everyone.
        </p>

        <p class="p-text spacer-20">
          Think about it. If thousands of people are placing the same bets at
          the same time, those golden opportunities vanish.
        </p>

        <p class="p-text">That's why we only sell 10 copies per month.</p>
        <p class="p-text">
          This isn't about making quick cash selling thousands of copies. This
          is about delivering REAL RESULTS to a select few who understand the
          game.
        </p>
        <p class="p-text">
          Smart money knows: exclusivity equals profit. When everyone has the
          same edge, nobody has an edge at all.
        </p>
        <p class="p-text">
          10 minutes from now? While others are fighting over the same tired
          bets... you could be hitting 'START' on your personal money printer.
        </p>

        <p class="p-text">But only if you act now.</p>

        <p class="p-text">
          Get in now at the lowest price you'll ever see. Or risk missing out
          forever.
        </p>
        <p class="p-text spacer-40">
          All 3 profit pulling auto sytems are available ONLY to invited
          customers! Enter your name and email to apply. If you are accepted we
          will send bank transfer details for the payment.
        </p>
        <h1 class="text-center"><strong>£999</strong></h1>
        <p>
          <a href="#" class="cta fs-60-40 open-modal">Apply To Join</a>
          <img
            src="images/cta-shadow.png"
            alt=""
            class="d-block mx-auto"
          /><br />
          <br />
        </p>
        <h2 class="fs-55-35 poppins-extrabold text-center spacer-50 l-h-11">
          Here's what to do next
        </h2>
        <p class="p-text">
          Click the "APPLY TO JOIN NOW" button below and fill in your name and
          email. REMEMBER: This exclusive offer is ONLY for my existing
          customers who received a personal invitation to this page!
        </p>
        <p class="p-text">
          When you apply, we'll send you bank transfer details to complete your
          purchase. This special process ensures only invited VIPs get access!
        </p>
        <p class="p-text">
          Once your payment is confirmed, you'll immediately download the
          software and training materials. You're literally minutes away from
          having THREE profit hunting bots working for you 24/7!
        </p>
        <p class="p-text">
          You'll get immediate access to the All In One automated betting
          software plus my quick start guide delivered straight to your inbox.
        </p>
        <p class="p-text">
          Think about it... while others are manually placing single bets, your
          automated army will be capturing value opportunities around the clock!
        </p>
        <p class="p-text">
          The sooner you start, the sooner the profits roll in. Don't let
          another value bet slip through your fingers!
        </p>
        <p class="p-text spacer-40">
          Click the "APPLY TO JOIN NOW" button below and unleash your automated
          profit machine before this invitation only offer vanishes forever!
        </p>
        <h1 class="text-center"><strong>£999</strong></h1>
        <p>
          <a href="#" class="cta fs-60-40 open-modal">Apply To Join </a>
          <img
            src="images/cta-shadow.png"
            alt=""
            class="d-block mx-auto"
          /><br />
          <br />
        </p>
        <h3 class="fs-55-35 poppins-extrabold text-center spacer-40 l-h-11">
          Common Questions About <br />
          The All In <span class="c-yellow">One Bot</span>
        </h3>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          Do I need any betting experience to use this?
        </p>
        <p class="p-text spacer-45">
          Not at all. The bots come pre loaded with my proven profitable
          settings. Just download, hit start, and let them do all the work. You
          don't need to understand betting or value hunting. The software
          handles everything.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          What if my accounts are gubbed?
        </p>
        <p class="p-text spacer-45">
          No problem! These strategies work perfectly with gubbed accounts. Even
          small £1 stakes add up quickly when you're getting superior value. You
          don't need big stakes or bonus offers to profit.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          How much time do I need to spend on this?
        </p>
        <p class="p-text spacer-45">
          Minutes a day. Once you've set up the bots, they work 24/7 finding and
          placing value bets automatically. The profit &amp; loss of your bets
          update automatically. No more being glued to your screen. No more
          frantically refreshing odds software. And no more spending hours
          checking the results of your bets.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          How much money do I need to start?
        </p>
        <p class="p-text spacer-45">
          You can start with as little as £50. The bots work with any size
          betting bank. And because they're finding value others can't see, your
          bank grows steadily over time.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          What about updates and support?
        </p>
        <p class="p-text spacer-45">
          You get instant access to our private community, direct contact with
          me and all future software updates. The algorithm gets smarter every
          day. And the bots update automatically so you'll always have the
          latest version.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          How quickly can I get started?
        </p>
        <p class="p-text spacer-45">
          You'll get instant access to everything. Download the software, follow
          the quick start guide and you could have your first automated bet
          placed within the next 15 minutes.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          How do the three bots work together?
        </p>
        <p class="p-text spacer-45">
          This is what makes the system so powerful. All three bots run
          simultaneously! While your Each Way bot is scanning horse racing, your
          2 Up bot is hunting football value, and your Golf bot is finding
          tournament opportunities. They're all working at the exact same time
          to maximise your profits.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          How does the bot find value bets?
        </p>
        <p class="p-text spacer-45">
          You're getting the best of both worlds. The bots use TWO powerful
          methods to find value. First they use traditional Exchange comparison
          to spot proven profitable bets. Then the breakthrough algorithm finds
          additional value bets BEFORE Exchange markets form. This dual approach
          means you're getting double the opportunities. Including bets other
          punters can't even see.
        </p>

        <p class="p-text font-weight-semi-bold fs-24-20 spacer-15">
          Why do I have to apply to join?
        </p>
        <p class="p-text spacer-45">
          We use an application process to ensure only people who have been
          personally invited can join. This helps us strictly limit numbers to
          just 10 per month. We also get charged 20% payment processing fees due
          to the higher risk nature of betting products. By using bank transfer
          that has no fees we keep the cost of the bots more affordable for you.
        </p>

        <h1 class="text-center"><strong>£999</strong></h1>
        <p>
          <a href="#" class="cta fs-60-40 open-modal">Apply To Join </a>
          <img
            src="images/cta-shadow.png"
            alt=""
            class="d-block mx-auto"
          /><br />
          <br />
        </p>
      </div>
    </section>

    <section class="section-another-value">
      <div class="wrapper">
        <h1 class="fs-55-35 poppins-extrabold text-center spacer-50 l-h-11">
          Don't Let <span class="c-yellow">Another</span> <br />
          <span class="c-yellow">Value Bet Slip</span> Away
        </h1>

        <p class="p-text">
          Right now while you're reading this, the bots are out there finding
          profitable bets.
        </p>

        <p class="p-text">
          Every minute you wait is another opportunity missed.
        </p>

        <p class="p-text">Another value bet you'll never see.</p>

        <p class="p-text">Another profit you'll never bank.</p>

        <p class="p-text">Another edge you're giving away to other punters.</p>

        <p class="p-text">
          Click the button below now and join the smart punters who are letting
          automation do all the work.
        </p>

        <p class="p-text">
          Your three profit hunting bots are ready and waiting.
        </p>

        <p class="p-text spacer-40">Are you?</p>

        <div class="mw-530px">
          <h1 class="text-center"><strong>£999</strong></h1>
          <p>
            <a href="#" class="cta fs-60-40 open-modal">Apply To Join </a>
            <img
              src="images/cta-shadow.png"
              alt=""
              class="d-block mx-auto"
            /><br />
            <br />
          </p>
          <p style="text-align: center;">
            <a href="mailto:support@bonusbagging.co.uk">Contact Us</a> |
            <a href="https://mikecruickshank.com/privacy-policy"
              >Privacy Policy</a
            >
            <br /><br />
            Copyright
            <?php echo date("Y"); ?>, All rights reserved
          </p>
          <p style="text-align: center;">
            <br />
            Mike Cruickshank, Unit 4, Sandy Court, Ashleigh Way, Plympton,
            Plymouth, PL7 5JX
          </p>
        </div>
      </div>
    </section>

    <!-- Modal Markup -->
    <div class="modal-overlay" id="applicationModal">
      <div class="modal-content">
        <button class="modal-close" id="closeModal">&times;</button>
        <h2>APPLY TO JOIN THE ALL IN ONE SYSTEM</h2>
        <p>
          Enter your name and email now. We'll check our database to confirm
          you're an existing customer. Upon verification, you'll receive bank
          transfer details immediately. This process can take up to 24 hours.
          This verification protects our limited monthly spots.
        </p>

        <p>
          Paying through bank transfer avoids the 20% processing fees typically
          charged on betting products. By eliminating these fees, we can offer
          you these powerful bots at a more affordable price.
        </p>

        <p>
          Once you send your payment, you'll get access to download all three
          profit hunting auto systems and comprehensive training materials. This
          invitation expires tonight. Only verified existing customers can
          access this offer.
        </p>

        <p>
          Enter your details now to secure your spot before we reach our monthly
          limit of 10 users.
        </p>
        <form id="appForm">
          <input
            type="text"
            id="appName"
            name="name"
            placeholder="Enter Your Name"
            required
          />
          <input
            type="email"
            id="appEmail"
            name="email"
            placeholder="Enter Your Email"
            required
          />
          <button type="submit">Apply To Join The All In One System</button>
        </form>
        <div id="confirmationMessage" style="display:none; margin-top:15px;">
          <p>
            Thank you for submitting your application to become an All In One
            System Member. We will review your application within the next 24
            hours and get back to you.
          </p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
      // Initialize EmailJS with your public key
      (function(){
        emailjs.init("uwSX1nfm5GtZb5VwV");
      })();

      (function() {
        const modal = document.getElementById('applicationModal');
        const closeModal = document.getElementById('closeModal');
        const openButtons = document.querySelectorAll('.open-modal');
        const appForm = document.getElementById('appForm');
        const confirmationMessage = document.getElementById('confirmationMessage');

        // Open modal on button click
        openButtons.forEach(btn => {
          btn.addEventListener('click', function(e) {
            e.preventDefault();
            modal.style.display = 'flex';
            document.body.classList.add('modal-open');  // Prevent page scroll
          });
        });

        // Close modal on close button click or when clicking outside modal content
        closeModal.addEventListener('click', function() {
          modal.style.display = 'none';
          document.body.classList.remove('modal-open'); // Re-enable page scroll
        });
        window.addEventListener('click', function(e) {
          if (e.target == modal) {
            closeModalHandler();
          }
        });

        // Process form submission using EmailJS
        appForm.addEventListener('submit', function(e) {
          e.preventDefault();

          // Show loading state
          const submitButton = appForm.querySelector('button[type="submit"]');
          submitButton.disabled = true;
          submitButton.textContent = 'Sending...';

          const name = document.getElementById('appName').value;
          const email = document.getElementById('appEmail').value;

          const serviceID = "service_y8pf5in";
          const templateID = "template_r1rnacm";

          const templateParams = {
            from_name: name,
            reply_to: email,
            to_name: 'Admin',
            message: `New application from ${name} (${email})`
          };

          emailjs.send(serviceID, templateID, templateParams)
            .then(function(response) {
              console.log("SUCCESS!", response);
              appForm.style.display = 'none';
              confirmationMessage.style.display = 'block';
            })
            .catch(function(error) {
              console.error("FAILED...", error);
              alert(`Failed to send application: ${error.text}`);
            })
            .finally(function() {
              submitButton.disabled = false;
              submitButton.textContent = 'Apply To Join The All In One System';
            });
        });
      })();
    </script>
  </body>
</html>
