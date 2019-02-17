<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Chapter\IndexChapter;
use App\Http\Requests\Admin\Chapter\StoreChapter;
use App\Http\Requests\Admin\Chapter\UpdateChapter;
use App\Http\Requests\Admin\Chapter\DestroyChapter;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Chapter;

class ChaptersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexChapter $request
     * @return Response|array
     */
    public function index(IndexChapter $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Chapter::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'chapter', 'description'],

            // set columns to searchIn
            ['id', 'chapter', 'description']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.chapter.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.chapter.create');

        return view('admin.chapter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreChapter $request
     * @return Response|array
     */
    public function store(StoreChapter $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Chapter
        $chapter = Chapter::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/chapters'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  Chapter $chapter
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Chapter $chapter)
    {
        $this->authorize('admin.chapter.show', $chapter);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Chapter $chapter
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Chapter $chapter)
    {
        $this->authorize('admin.chapter.edit', $chapter);

        return view('admin.chapter.edit', [
            'chapter' => $chapter,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateChapter $request
     * @param  Chapter $chapter
     * @return Response|array
     */
    public function update(UpdateChapter $request, Chapter $chapter)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Chapter
        $chapter->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/chapters'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/chapters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyChapter $request
     * @param  Chapter $chapter
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyChapter $request, Chapter $chapter)
    {
        $chapter->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
