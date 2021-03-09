<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Repositories\UnicaRepository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SyncUnica extends Command
{
//    private const USERNAME = env('UNICA_USERNAME');
//    private const PASSWORD = env('UNICA_PASSWORD');
    private $unica;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unica:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync data from Unica';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UnicaRepository $unicaRepository)
    {
        $this->unica = $unicaRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::beginTransaction();
        try {
            $categories = $this->unica->getListCategory();
            foreach ($categories as $item) {
                $category = new Category();
                $category->unica_id = $item->id;
                $category->name = $item->name;
                $category->slug = url_slug($item->name);
                $category->parent_id = 0;
                $category->status = 1;
                $category->save();
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();
        }
    }
}
