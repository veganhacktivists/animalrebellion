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
    }
}
