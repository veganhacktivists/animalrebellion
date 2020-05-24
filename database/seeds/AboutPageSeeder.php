<?php

use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutPage = \App\Models\AboutPage::create([
            'title' => 'About',
            'header' => 'About Animal Rebellion',
            'content' => 'Animal Rebellion is a mass movement calling for immediate transition to a just and sustainable plant-based food system.<br><br>'.
                ' We invite everyone to make the connection between animal agriculture and the climate crisis. Driven by mounting evidence, we are calling on government to transition to a food system that will support farmers, nourish communities, care for animals, and help save the planet.<br><br>'.
                'Join us in using nonviolent civil resistance to create a sustainable plant-based food system and ensure justice for all animals.<br><br>'.
                'Anyone can be part of Animal Rebellion. You do not have to be a rebel to join our community. You do not need to live or eat a certain way. If you support the systemic changes that we call for, then you are already part of the movement.',
            'slug' => 'about',
            'thumbnail' => 'fas fa-folder-open',
            'published' => true,
        ]);

        $culturePage = \App\Models\AboutPage::create([
            'title' => 'Culture',
            'header' => 'Our Culture',
            'content' => 'We aim to build a culture that is inclusive, regenerative and always evolving.'.
                ' Embodying a true regenerative culture is a necessary commitment in order to create meaningful and lasting change in this world. '.
                'We acknowledge that we may bring into our movement elements of the toxic system that we are trying to address. '.
                'Societal systems of oppression, such as sexism, classism and racism, may manifest themselves within our movement. '.
                '<br><br>We are constantly learning and striving to build a culture that eradicates manifestations of these systems '.
                'and is inclusive to people of all walks of life. We want people to feel welcome, comfortable and included within our spaces. '.
                'We want everyone to be heard, listened to, and empowered, regardless of their race, class, gender or other identity.'.
                '<br><br>We seek to build a culture based on principles from nature and ecology. Its purpose is to nurture a new culture that '.
                'is resilient and robust and which can support us all through the changes we must inevitably face together. We see that natural cycles of action, '.
                'followed by rest and reflection are key to sustaining our movement. There is no singular definition, '.
                'but a framework based on natural principles allows each of us to develop our own approach to practicing a '.
                'regenerative way of being. At its simplest this means putting a little bit more in than we take out.',
            'slug' => 'culture',
            'thumbnail' => 'fas fa-users',
            'published' => true,
        ]);

        $storyPage = \App\Models\AboutPage::create([
            'title' => 'Story',
            'header' => 'Become part of the story',
            'content' => 'We declared ourselves in open rebellion against the UK government '.
                'on August 17th 2019, whilst occupying Trafalgar Square with 10,000 people. The '.
                'energy was electric and this was only the beginning. Over the next few weeks, '.
                'we reforested Parliament Square as a symbolic act for the burning Amazon rainforest. '.
                'We spray-painted the Old Bailey, the UK Central Criminal Court, to highlight their '.
                'gross inaction on the climate emergency. Next, came the Rebellion.'.
                '<br><br>On the 7th of October, 1,500 people took over Smithfields Market, the oldest '.
                'meat market in the UK, to transform it into a hopeful and joyous vision of a plant-based future. '.
                'This temporary utopia highlighted the world we want to create, one where animals, farmers and people '.
                'live together harmoniously whilst respecting planetary boundaries. The reception of Animal Rebellion '.
                'showed the hunger for a movement that was finally telling the truth about the impact of animal farming '.
                'and fishing on our planet. We generated national and international news coverage, with Animal Rebellion groups '.
                'springing up all across the globe. Finally, the elephant in the room was being addressed.'.
                '<br><br><i>Now, we are working relentlessly to build our movement. So come and join us. Rebel for life. '.
                'For the planet. For the animals. For our children’s children’s futures. There is so much work to be done.</i>',
            'slug' => 'story',
            'thumbnail' => 'fas fa-paw',
            'published' => true,
        ]);

        $valuesPage = \App\Models\AboutPage::create([
            'title' => 'Values',
            'header' => 'Our Principles & Values',
            'content' => '<h4>All are welcome who want to adhere to our principles and values: </h4><br><br><br><br>'.
                '<strong>1. We are an anti-speciesist movement with a shared vision of change</strong> <br><br>'.
                '<strong>2. We set our mission on what is necessary</strong><br><br>'.
                '<strong>3. We need a regenerative culture</strong><br><br>'.
                '<strong>4. We openly challenge ourselves and our toxic system</strong><br><br>'.
                '<strong>5. We value reflecting and learning</strong><br><br>'.
                '<strong>6. We welcome everyone and every part of everyone</strong><br><br>'.
                '<strong>7. We actively mitigate for power</strong><br><br>'.
                '<strong>8. We avoid blaming and shaming</strong><br><br>'.
                '<strong>9. We are a non-violent network</strong><br><br>'.
                '<strong>10. We are based on autonomy and decentralisation</strong>',
            'slug' => 'values',
            'thumbnail' => 'fas fa-comments',
            'published' => true,
        ]);
    }
}
