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
        ]);
    }
}
