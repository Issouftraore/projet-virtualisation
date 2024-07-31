<?php

namespace App\Http\Controllers;

/**
 * @OA\Schema(
 *     schema="Book",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="title", type="string"),
 *     @OA\Property(property="author", type="string"),
 *     @OA\Property(property="description", type="string"),
 *     @OA\Property(property="datePub", type="string", format="date"),
 *     @OA\Property(property="category_id", type="integer")
 * )
 */
class SwaggerSchemas extends Controller
{
}

/**
 * @OA\Schema(
 *     schema="Category",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="name", type="string")
 * )
 */
class SwaggerSchemas extends Controller
{
}

/**
 * @OA\Schema(
 *     schema="Client",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="firstname", type="string"),
 *     @OA\Property(property="lastname", type="string"),
 *     @OA\Property(property="birthday", type="string", format="date")
 * )
 */
class SwaggerSchemas extends Controller
{
}
