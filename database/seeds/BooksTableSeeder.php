<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => 1,
            'user_id' => 1,
            'title' => 'Becoming',
            'author' => 'Michelle Obama',
            'blurb' => "In a life filled with meaning and accomplishment, Michelle Obama has emerged as one of the most iconic and compelling women of our era. As first lady of the United States of America - the first African American to serve in that role - she helped create the most welcoming and inclusive White House in history while also establishing herself as a powerful advocate for women and girls in the US and around the world, dramatically changing the ways that families pursue healthier and more active lives, and standing with her husband as he led America through some of its most harrowing moments. Along the way, she showed us a few dance moves, crushed Carpool Karaoke, and raised two down-to-earth daughters under an unforgiving media glare.

In her memoir, a work of deep reflection and mesmerizing storytelling, Michelle Obama invites listeners into her world, chronicling the experiences that have shaped her - from her childhood on the South Side of Chicago to her years as an executive balancing the demands of motherhood and work to her time spent at the world's most famous address. With unerring honesty and lively wit, she describes her triumphs and her disappointments, both public and private, telling her full story as she has lived it - in her own words and on her own terms. Warm, wise, and revelatory, Becoming is the deeply personal reckoning of a woman of soul and substance who has steadily defied expectations - and whose story inspires us to do the same.",
            'read_status_id' => 2
        ], [
            'id' => 2,
            'user_id' => 1,
            'title' => 'The Shining',
            'author' => 'Stephen King',
            'blurb' => 'Jack Torrance\'s new job at the Overlook Hotel is the perfect chance for a fresh start. '
                        . 'As the off-season caretaker at the atmospheric old hotel, he\'ll have plenty of time to '
                        .'spend reconnecting with his family and working on his writing. But as the harsh winter '
                        .'weather sets in, the idyllic location feels ever more remote...and more sinister. And the '
                        .'only one to notice the strange and terrible forces gathering around the Overlook is Danny '
                        .'Torrance, a uniquely gifted five-year-old',
            'read_status_id' => 1
        ], [
            'id' => 3,
            'user_id' => 1,
            'title' => 'Across the Winding River',
            'author' => 'Aimie K. Runyan',
            'blurb' => "Beth Cohen wants to make the most of the months she has left with her elderly father, Max. His only request of his daughter is to go through the long-forgotten box of memorabilia from his days as a medic on the western front. Then, among his wartime souvenirs, Beth finds a photograph of her father with an adoring and beautiful stranger—a photograph worth a thousand questions.

It was 1944 when Max was drawn into the underground resistance by the fearless German wife of a Nazi officer. Together, she and Max were willing to risk everything for what they believed was right. Ahead of them lay a dangerous romance, a dream of escape, and a destiny over which neither had control.

But Max isn’t alone in his haunting remembrances of war. In a nearby private care home is a fragile German-born woman with her own past to share. Only when the two women meet does Beth realize how much more to her father there is to know, all the ways in which his heart still breaks, and the closure he needs to heal it.",
            'read_status_id' => 3
        ], [
            'id' => 4,
            'user_id' => 1,
            'title' => 'Her Final Words',
            'author' => 'Brianna Labuskes',
            'blurb' => 'It seems like an open-and-shut case for FBI special agent Lucy Thorne when Eliza Cook walks into the field office. The teenage girl confesses to murdering a young boy. Disturbingly composed, she reveals chilling details only the killer could know. Beyond that Eliza doesn’t say another word, leaving a vital question met with dead silence: Why did she do it?

To find the answer, Lucy goes to the scene of the crime in the small Idaho town of Knox Hollow. But Lucy’s questions are only mounting. Especially when she’s drawn deeper into the life of the victim. Then a combing of the woods yields unsettling evidence that Eliza isn’t the only one in this close-knit rural community with secrets.

Getting to the truth is becoming Lucy’s obsession. And it’s a dangerous one. Because for the good folks of Knox Hollow, hiding that truth will take more than silence.',
            'read_status_id' => 4
        ], [
            'id' => 5,
            'user_id' => 1,
            'title' => '28 Summers',
            'author' => 'Elin Hilderbrand',
            'blurb' => "When Mallory Blessing's son, Link, receives deathbed instructions from his mother to call a number on a slip of paper in her desk drawer, he's not sure what to expect. But he certainly does not expect Jake McCloud to answer. It's the late spring of 2020 and Jake's wife, Ursula DeGournsey, is the frontrunner in the upcoming Presidential election.

There must be a mistake, Link thinks. How do Mallory and Jake know each other?

Flash back to the sweet summer of 1993: Mallory has just inherited a beachfront cottage on Nantucket from her aunt, and she agrees to host her brother's bachelor party. Cooper's friend from college, Jake McCloud, attends, and Jake and Mallory form a bond that will persevere -- through marriage, children, and Ursula's stratospheric political rise -- until Mallory learns she's dying.
",
            'read_status_id' => 1
        ]);
    }
}
