import React from "react";

export default function H1({ ...props } : React.ComponentProps<"h1">) {
    return (
        <h1>
            {props.children}
        </h1>
    );
}