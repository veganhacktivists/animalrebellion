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
            'content' => '<h4>All are welcome who want to adhere to our principles and values: </h4><br><br>'.
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

        $demandsPage = \App\Models\AboutPage::create([
            'title' => 'Demands',
            'header' => 'Our Demands',
            'content' => '<h4>Animal Rebellion shares Extinction Rebellion’s Three Demands.<br>'.
                'To each we add our own: transition to a just and sustainable plant-based food system.</h4><br><br>'.
                '<strong>1. TELL THE TRUTH</strong> <br>'.
                '<i>Government must tell the truth by declaring a climate and ecological emergency, working with '.
                'other institutions to communicate the urgency for change.</i><br>'.
                'To tell the truth about the climate and ecological emergency (CEE) government, '.
                'media, and all other institutions must tell the truth about animal agriculture. '.
                'The CEE cannot be addressed effectively without acknowledging the devastating '.
                'impacts of animal agriculture on the planet. These include, but are not limited to, '.
                'deforestation, ocean dead-zones, biodiversity loss and air pollution. '.
                'Without mentioning a plant-based food system, the true solution will always be silenced.<br><br>'.
                '<strong>2. ACT NOW</strong><br>'.
                '<i>Government must act now to halt biodiversity loss and reduce greenhouse gas emissions to net zero by 2025.</i><br>'.
                'We are all hurtling towards climate catastrophe, social collapse, mass starvation, and the death of billions of beings.'.
                ' To halt this devastation, the government must reduce greenhouse gas (GHG) emissions to net zero by 2025. '.
                'This cannot be done without transition to a just and sustainable plant-based food system.<br><br>'.
                '<strong>3. BEYOND POLITICS</strong><br><br>'.
                '<i>Government must create and be led by the decisions of a Citizens’ Assembly on climate and ecological justice.</i><br>'.
                'This is an emergency. The issues are huge and complex, and the solutions needed are urgent. '.
                'Political power in the UK lies in the hands of a few elected politicians. Over the last 40 years, '.
                'this system has proved incapable of making the long-term decisions needed to '.
                'deal with the climate and ecological emergency.<br>'.
                'The political timescale is short-term: intimately linked to electoral, rather than environmental, change. '.
                'Politicians are also lobbied by huge corporate interests to protect certain industries, '.
                'including the animal farming and fishing industries.<br>'.
                'It is therefore crucial that a citizens’ assembly is presented with the facts about animal '.
                'agriculture and the plant-based food alternatives. Members of the assembly need to make '.
                'educated and unbiased choices. People must have the power to make informed legislative change.',
            'slug' => 'demands',
            'thumbnail' => 'fas fa-comments',
            'published' => true,
        ]);

        $strategyPage = \App\Models\AboutPage::create([
            'title' => 'Strategy',
            'header' => 'Our Strategy',
            'content' => 'Animal Rebellion engages in mass nonviolent civil disobedience '.
                'to demand transition to a just and sustainable plant-based food system.<br>'.
                'We ask everyone to draw courage from the movement and collaborate to achieve change. '.
                'Whilst our strategy does focus on acts of rebellion, physical rebellion is not a'.
                'requirement. We encourage various actions provided they are peaceful and contribute towards our aim.<br>'.
                'Nonviolent civil disobedience is a fundamental part of Animal Rebellion’s strategy. '.
                'We promote civil disobedience and rebellion because the situation is urgent and such action '.
                'is necessary. Those of us who can rebel on the streets will do so. Those of us who can’t will '.
                'find other ways of resisting. All of us will work together.<br>'.
                'Animal Rebellion focuses our strategy on political and systemic change, not personal change. '.
                'You do not need to be vegan, or even vegetarian, to join the movement. If you believe '.
                'in a just and sustainable plant-based food system, then you are already '.
                'part of the solution. Belief is half the battle.<br>'.
                'Whilst we commend organisations encouraging individual lifestyle changes, our role '.
                'lies in demanding broader system change from the UK government. We do not concentrate '.
                'on traditional systems of campaigning such as petitions or writing to our MPs. '.
                'Again, we honour the work that is already being done and we do not attempt to replace or erase that.<br>'.
                'Instead, we promote mass civil disobedience in full public view. This can mean '.
                'creating economic disruption to shake the political system and civil '.
                'disruption to raise awareness. We are deeply sorry for any inconvenience '.
                'that this causes. We encourage you to compare temporary inconvenience with'.
                ' irreversible destruction and decide which one you’d rather be impacted by.<br>',
            'slug' => 'strategy',
            'thumbnail' => 'fas fa-comments',
            'published' => true,
        ]);
    }
}
