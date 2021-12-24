<?php
//TODO: Create a route for storing a book

    namespace App\Http\Controllers;

    use App\Models\Book;
    use App\Http\Resources\BookCollection;
    use App\Http\Requests\StoreBookRequest;
    use App\Http\Requests\UpdateBookRequest;
    use Illuminate\Http\JsonResponse;

    class BookController extends Controller
    {
        /**
         * @OA\Get(
         *      path="/books",
         *      operationId="getBooksList",
         *      tags={"Books"},
         *      summary="Get list of books",
         *      description="Returns list of books",
         *      @OA\Response(
         *          response=200,
         *          description="Successful operation",
         *       ),
         *      @OA\Response(
         *          response=401,
         *          description="Unauthenticated",
         *      ),
         *      @OA\Response(
         *          response=403,
         *          description="Forbidden"
         *      )
         *     )
         */
        public function index (): JsonResponse
        {
            return response()->json(["message" => new BookCollection(Book::all())]);
        }

        /**
         * @OA\Post(
         *      path="/books",
         *      operationId="storeBook",
         *      tags={"Books"},
         *      summary="Store new book",
         *      description="Returns book data",
         *      @OA\RequestBody(
         *          required=true,
         *          @OA\JsonContent(ref="#/components/schemas/StoreBookRequest")
         *      ),
         *      @OA\Response(
         *          response=201,
         *          description="Successful operation",
         *          @OA\JsonContent(ref="#/components/schemas/Book")
         *       ),
         *      @OA\Response(
         *          response=400,
         *          description="Bad Request"
         *      ),
         *      @OA\Response(
         *          response=401,
         *          description="Unauthenticated",
         *      ),
         *      @OA\Response(
         *          response=403,
         *          description="Forbidden"
         *      )
         * )
         */
        public function store (StoreBookRequest $request): JsonResponse
        {
            $validated = $request->validated();

            $book = Book::create($validated);

            return response()->json(["message" => $book], 201);
        }

        public function show (Book $book)
        {
            //
        }

        public function edit (Book $book)
        {
            //
        }

        public function update (UpdateBookRequest $request, Book $book)
        {
            //
        }

        public function destroy (Book $book)
        {
            //
        }
    }
