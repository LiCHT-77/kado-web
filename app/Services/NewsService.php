<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Arr;

class NewsService
{
    /**
     * News Model
     *
     * @var News
     */
    protected $newsModel;
    
    public function __construct(News $news)
    {
        $this->newsModel = $news;
    }

    /**
     * Get list News
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getNewsList(int $limit=30)
    {
        return $this->newsModel
            ->query()
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    /**
     * Save News
     *
     * @param array $attribute
     * @return void
     */
    public function saveNews(array $attribute)
    {
        $this->newsModel->updateOrCreate(
            Arr::only($attribute, ['id']),
            Arr::only($attribute, [
            'title'
        ])
        );
    }

    /**
     * Delete News
     *
     * @param integer $id
     * @return void
     */
    public function deleteNews(int $id)
    {
        $this->newsModel->destroy($id);
    }
}
