<?php declare(strict_types = 1);

use App\Handler\MailHandler;
use App\Mail\ContactMail;
use App\Transformer\ContactMailTransformer;
use App\Transformer\WorkMailTransformer;
use App\Validator\ContactMailValidate;
use Codeception\Test\Unit;

/**
 * Class TransformerTest
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class TransformerTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    /**
     * @throws Exception
     */
    public function testWhenTransformDataInContactMailTransformerExpectInstance(): void
    {
        $data = [
            'name' => 'example name',
            'email' => 'example@example.com',
            'description' => 'example description'];

        /** @var ContactMailTransformer $transformer */
        $transformer = $this->make(ContactMailTransformer::class);

        /** @var ContactMail $entity */
        $entity = $transformer->transform($data);

        $this->tester->assertNotEmpty($entity);
        $this->tester->assertEquals(ContactMail::class, get_class($entity));
        $this->tester->assertEquals($data['description'], $entity->getDescription());
    }

    /**
     * @throws Exception
     */
    public function testWhenTransformEmptyDataInWorkMailTransformerExpectNull(): void
    {
        /** @var WorkMailTransformer $transformer */
        $transformer = $this->make(WorkMailTransformer::class);

        $this->tester->assertIsNotObject($transformer->transform([]));
        $this->tester->assertEquals(null, $transformer->transform([]));
    }
}
