<div class="border-t bg-white items-stretch mt-4 flex flex-wrap -mx-px overflow-hidden sm:-mx-px md:-mx-px lg:-mx-px xl:-mx-px">
      <div class="self-stretch my-px px-px w-1/2 overflow-hidden sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-px lg:px-px lg:w-1/2 xl:my-px xl:px-px xl:w-1/2">
        <h1 class="mt-5 mb-5 text-4xl"><center><strong>{{$imageTitle}}</strong></center></h1>
        <div><img class="mx-auto" src= "{{$attributes['src']}}" alt=""></div>
      </div>

      <div class="self-stretch my-px px-px w-1/2 overflow-hidden sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-px lg:px-px lg:w-1/2 xl:my-px xl:px-px xl:w-1/2">
          <h1 class="mt-5 mb-5 text-4xl"><center><strong>{{$textTitle}}</strong></center></h1>
          <p class="-mt-1 ml-12 mx-auto">
            {{$text}}
          </p>
      </div>
    </div>