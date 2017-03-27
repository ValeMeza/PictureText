<?php


require_once("autoload.php");
/**
 * picture class
 * this will be the classs picture attributes and entities
 * @autho Valente Meza <valebmeza@gmail.com>
 * @version 3.2.0
 */

class Picture implements \JsonSerializable {

    /**
     * Upload of the picture; this is the primary key
     * @var int $pictureUpload
     */
    private $pictureUpload;
    /**
     * Text from the picture
     */
    private $pictureText;

    /**
     * constructor for this picture
     * @param int $newPictureUpload upload of this picture
     * @param string $newPictureText text from the upload
     * @throws \InvalidArgumentException if data types are not valid
     * @throws \TypeError if data types violate type
     * @throws \Exception if some other exception occurs
     */
    public function __construct(int $newPictureUpload = null, string $newPictureText = null) {
        try {
            $this->setPictureUpload($newPictureUpload);
            $this->setPictureText($newPictureText);
        } catch (\InvalidArgumentException $invalidArgument) {
            throw(new\InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
        }  catch(\RangeException $range) {
            //** rethrow the exception to the caller**/
            throw(new\RangeException($range->getMessage(), 0, $range));
        } catch (\TypeError $typeError) {
            //**rethrow the exception to the caller**//
            throw(new\TypeError($typeError->getMessage(), 0 , $typeError));
        } catch (\Exception $exception) {
            // rethrow exception to the caller
            throw(new\Exception($exception->getMessage(), 0, $exception));
        }
    }

    /** accessor method for picutreUpload
     * @return int|null value of picture Upload
     **/
    public function getPictureUpload() {
        return ($this->pictureUpload);
    }

    /**
     * mutator method for picture upload
     * @param int $newPictureUpload new value of picture upload
     * @throws \RangeException if $newPictureUpload is not positive
     * @throws \TypeError if #newPictureUpload is not an integer
     */
    public function setPictureUpload(int $newPictureUpload = null) {
        if($newPictureUpload === null) {
            throw(new \RangeException("picture is not positive"));
        }
        $this->pictureUpload = $newPictureUpload;
    }
}