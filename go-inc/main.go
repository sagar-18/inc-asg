package main

import (
    "fmt"
    "net/http"
)

func main() {
    http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
        fmt.Fprintf(w, "Hello, Go!")
    })

    fmt.Println("Server is running on http://localhost:4000")
    http.ListenAndServe(":4000", nil)
}
