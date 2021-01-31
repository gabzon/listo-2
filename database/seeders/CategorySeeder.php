<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::factory()->count(5)->create();

        Category::create([
            'name'          => 'Romance',
            'description'   => 'Activities associated with love made by couple',
            'icon'          => 'heart',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Shopping',
            'description'   => 'Travel focused on the activity of buying goods from shops, mostly refering to clothings, and jewelry',
            'icon'          => 'shopping',
            'activity'      => false,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Cultural',
            'description'   => 'Tourism focused on learning customs, arts, and social behaviour of another society',
            'icon'          => 'cultural',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Sport',
            'description'   => 'Travel where people practice, or compete in any athletic activity for accomplishment, fun or health',
            'icon'          => 'basketball',
            'activity'      => true,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Leisure',
            'description'   => 'Any activities done during free time for enjoyment and entertainment',
            'icon'          => 'leisure',
            'activity'      => true,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Sightseeing',
            'description'   => 'Visiting places of interest in a particular location',
            'icon'          => 'sightseeing',
            'activity'      => false,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Nature',
            'description'   => 'Activities researching a connection with mother nature, including plants, animals, the landscape, and other features and products of the earth, as opposed to humans or human creations',
            'icon'          => 'nature',
            'activity'      => true,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Medical',
            'description'   => 'A travel with the purpose of an examination to assess a person\'s state of physical health or fitness',
            'icon'          => 'medical-heart',
            'activity'      => false,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Business',
            'description'   => 'Tourism directed towards work and professional activities',
            'icon'          => 'business',
            'activity'      => false,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Discovery',
            'description'   => 'Tourism directed towards exploring new habits, new places, new foods, new things',
            'icon'          => 'compass',
            'activity'      => true,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Well-being',
            'description'   => 'Activities that take a person into a state of being comfortable, relaxed, healthy, and happy',
            'icon'          => 'meditation',
            'activity'      => true,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Beach',
            'description'   => 'A travel in research of sun, water and sandy shores, especially by the sea',
            'icon'          => 'palm',
            'activity'      => true,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Wedding',
            'description'   => 'After marriage ceremony, a honeymoon travel involving romantic activities for couples',
            'icon'          => 'wedding',
            'activity'      => false,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Safari',
            'description'   => 'An expedition to observe or hunt animals in their natural habitat, especially in East Africa.',
            'icon'          => 'elephant',
            'activity'      => false,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Eco-Tourism',
            'description'   => 'Tourism directed towards exotic, often threatened, natural environments, intended to support conservation efforts and observe wildlife',
            'icon'          => 'eco-tourism',
            'activity'      => false,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Religion',
            'description'   => 'Tourism where people can worship their God by visiting temples and/or historic sites',
            'icon'          => 'religion',
            'activity'      => false,
            'tourism'       => true
        ]);
        
        Category::create([
            'name'          => 'Spirituality',
            'description'   => 'Tourism where people can worship their God by visiting temples and/or historic sites',
            'icon'          => 'religion',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Education',
            'description'   => 'Relating to education and scholarship',
            'icon'          => 'academic',
            'activity'      => true,
            'tourism'       => true        
        ]);

        Category::create([
            'name'          => 'Gastronomy',
            'description'   => 'The practice of discovering, choosing, cooking, and eating good food',
            'icon'          => 'gastronomy',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Fun & Entertainment',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Contribution',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Adventure',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Family',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Art & Self-expression',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => true
        ]);

        Category::create([
            'name'          => 'Self-development',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => false
        ]);

        Category::create([
            'name'          => 'Duties',
            'description'   => '',
            'icon'          => '',
            'activity'      => true,
            'tourism'       => false
        ]);


    }
}
