<div class="relative" x-data="{
              active: 1,
              loop() {
                  setInterval(() => { this.active = this.active === 4 ? 1 : this.active+1 }, 5000)
              },
          }" x-init="loop" x-cloak>
    <div class="flex overflow-x-hidden relative w-full overflow-hidden h-96 lg:h-228">
        <div class="bg-black absolute w-full h-96 lg:h-228 object-cover" x-show="active == 1" x-transition:enter="transition duration-1000"
             x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
             x-transition:leave="transition duration-1000" x-transition:leave-start="transform" x-transition:leave-end="transform -translate-x-full">
            <img class="w-full h-full object-cover opacity-30" alt="1"
                 src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
        </div>
        <div class="bg-black absolute w-full h-96 lg:h-228 object-cover" x-show="active == 2" x-transition:enter="transition duration-1000"
             x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
             x-transition:leave="transition duration-1000" x-transition:leave-start="transform" x-transition:leave-end="transform -translate-x-full">
            <img class="w-full h-full object-cover opacity-30" alt="2"
                 src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
        </div>
        <div class="bg-black absolute w-full h-96 lg:h-228 object-cover" x-show="active == 3" x-transition:enter="transition duration-1000"
             x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
             x-transition:leave="transition duration-1000" x-transition:leave-start="transform" x-transition:leave-end="transform -translate-x-full">
            <img class="w-full h-full object-cover opacity-30" alt="3"
                 src="https://images.unsplash.com/photo-1564069114553-7215e1ff1890?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80" />
        </div>
        <div class="bg-black absolute w-full h-96 lg:h-228 object-cover" x-show="active == 4" x-transition:enter="transition duration-1000"
             x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
             x-transition:leave="transition duration-1000" x-transition:leave-start="transform" x-transition:leave-end="transform -translate-x-full">
            <img class="w-full h-full object-cover opacity-30" alt="4"
                 src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80" />
        </div>
    </div>
</div>
