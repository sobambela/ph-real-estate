<div>
    @include('livewire.partials.hero')
    @include('livewire.partials.mission-statement',['text' => 'Paula Hardy Real Estate – a Commercial Real Estate Company focused on the leasing, buying, and selling of office and industrial space.'])
    <livewire:site.home.featured-properties/>
    @include('livewire.partials.features')
    <livewire:site.home.testimonials/>
    @include('livewire.partials.mission-statement',['text' => '“I’ve spent two decades in the competitive landscape of Johannesburg’s office space, establishing a reputation as a well-respected and innovative agent. How we market our properties sets us apart.” - Paula Hardy'])
    <livewire:site.home.agents/>
    <livewire:site.home.organisations/>
</div>
