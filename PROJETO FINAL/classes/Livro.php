<?php 
class Livro {
    private int $id;
    private string $titulo;
    private string $autor;
    private int $anoPubli;

    public function __construct(int $id, string $titulo, string $autor, int $anoPubli){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPubli = $anoPubli;
    }

    public function getId(): string {
        return $this->id;
    }
    public function getTitulo(): string {
        return $this->titulo;
    }
    public function getAutor(): string {
        return $this->autor;
    }
    public function getAnoPubli(): string {
        return $this->anoPubli;
    }

    public function toArray(): array{
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'anoPubli' => $this->anoPubli,

        ];
    }

    public static function fromArray($d): Livro{
        return new Livro(
            $d['id'],
            $d['titulo'],
            $d['autor'],
            $d['anoPubli']
        );
    }

}
?>