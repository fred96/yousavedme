  <x-carousel id="carousel-2" :indicators="true" :control="true" class="mb-1">
    <x-slot name="slot_1">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src="{{ url('/img/slider1.png' ) }}"/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 1</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>

    <x-slot name="slot_2">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src="{{ url('/img/slider2.png' ) }}"/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 2</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>

    <x-slot name="slot_3">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=" {{ url('/img/slider3.png' ) }}"/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 3</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>
<x-slot name="slot_4">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=" {{ url('/img/sli
der4.png' ) }}"/>                                                  </x-slot>                                                  <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 4</h2>
          </div>                                                   </x-slot>
      </x-card>
    </x-slot>
<x-slot name="slot_5">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=" {{ url('/img/sli
der5.png' ) }}"/>                                                  </x-slot>                                                  <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 5</h2>
          </div>                                                   </x-slot>
      </x-card>
    </x-slot>

<x-slot name="slot_6">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=" {{ url('/img/sli
der6.png' ) }}"/>                                                  </x-slot>                                                  <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1 mb-2 bg-red">Slot 6</h2>
          </div>                                                   </x-slot>
      </x-card>
    </x-slot>

<x-slot name="slot_7">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=" {{ url('/img/sli
der7.png' ) }}"/>                                                  </x-slot>                                                  <x-slot name="body">
          <div class="d-flex align-bottom slider-text h-100">
	    <h2 class="text-white display-1 align-bottom">Slot 7</h2>

	  </div>

	 </x-slot>

      </x-card>
    </x-slot>
  </x-carousel>
